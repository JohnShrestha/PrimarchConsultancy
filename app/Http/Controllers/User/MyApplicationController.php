<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ApplicationBackgroundInformation;
use App\Models\ApplicationDocument;
use App\Models\ApplicationEducationInformation;
use App\Models\ApplicationGeneralInformation;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MyApplicationController extends User_BaseController
{
    protected $panel = 'Application';
    protected $base_route = 'user.application';
    protected $view_path = 'user.application';
    protected $table;
    protected $application_general_information;
    protected $application_education_information;
    protected $application_background_information;
    protected $application_document;
    protected $folder = 'application';

    public function __construct(ApplicationGeneralInformation $application_general_information, ApplicationEducationInformation $application_education_information, ApplicationBackgroundInformation $application_background_information, ApplicationDocument $application_document)
    {
        $this->folder = getcwd() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
        $this->application_general_information = $application_general_information;
        $this->application_education_information = $application_education_information;
        $this->application_background_information = $application_background_information;
        $this->application_document = $application_document;
    }
    public function index()
    {
        $data['application'] =  DB::table('application_general_information')->where('user_id', Auth::user()->id)->where('status','active')->get();
        $data['unique_id'] = $data['application'];
        return view( parent::loadView($this->view_path.'.index'), compact('data'));

    }
    public function create()
    {
        $data['user'] =  DB::table('users')->where('id', Auth::user()->id)->first();
        return view(($this->view_path . '.create'), compact('data'));

    }

    public function store(Request $request)
    {
       
      //dd($request->all());
        // dd($this->application_general_information);
        // $this->validate($request, [
        //     'first_name' =>                   'required',
        //     'mid_name' =>                     'nullable',
        //     'last_name' =>                    'required',
        //     'dob' =>                          'required',
        //     'first_language' =>               'nullable',
        //     'citizenship_country' =>          'required',
        //     'passport' =>                     'required',
        //     'gender' =>                       'required',
        //     'marital' =>                      'required',
        //     'address' =>                      'required',
        //     'city' =>                         'required',
        //     'country' =>                      'required',
        //     'state' =>                        'required',
        //     'zipcode' =>                      'required',
        //     'email' =>                        'required',
        //     'tel' =>                          'required',
         //    'status' =>                       'required',

        // ]);

        $row                                    = $this->application_general_information;
        $row->user_id                           = Auth::user()->id;
        $row->unique_id                         = env("APPLICATION_SERIAL", 2079) . "" . date("dHis") . rand(0000, 9999);
        $row->added_by                          = Auth::user()->role;
        
        $row->office_name = json_encode($request->office_name);
       // dd($row->office_name);
        $row->office_address = json_encode($request->office_address);
        $row->office_telephone = json_encode($request->office_telephone);
        $row->office_fax = json_encode($request->office_fax);
        $success = $row->save();
       // dd($success);




        
        $row->status                            = 'active';
        $check                                  = $row->save();

        $unique_id = $row->unique_id;
        $student_parent_id = $row->id;
        $user_id  = $row->user_id;

        if (isset($check)) {
            $row_1 = $this->application_education_information;
            $row_1->unique_id          = $unique_id;
            $row_1->student_parent_id  = $student_parent_id;
            $row_1->user_id            = $user_id;
            $row_1->save();

            $row_2 = $this->application_background_information;
            $row_2->unique_id          = $unique_id;
            $row_2->student_parent_id  = $student_parent_id;
            $row_2->user_id            = $user_id;
            $row_2->save();

            $row_3 = $this->application_document;
            $row_3->unique_id          = $unique_id;
            $row_3->student_parent_id  = $student_parent_id;
            $row_3->user_id            = $user_id;
            $row_3->save();
        }


        if ($check) {
            session()->flash('alert-success', ' General Information Successfully Store');
            return redirect()->route($this->view_path . '.edit_student_education', ['unique_id' => $unique_id]);

        } else {
            session()->flash('alert-danger', 'General Information can not be updated');
            return redirect()->route($this->view_path . '.index');
        }
    }

     //edit fotrm
     public function edit($unique_id)
     {
         $data['single'] = $this->application_general_information::where('unique_id', '=', $unique_id)->first();
         return view(($this->view_path . '.edit'), compact('data'));
     }

     public function update(Request $request, $unique_id)
     {
         $row = $this->application_general_information::where('unique_id', '=', $unique_id)->first();
         $row->user_id                           = Auth::user()->id;
         $row->first_name                        = $request->first_name;
         $row->mid_name                          = $request->mid_name;
         $row->last_name                         = $request->last_name;
         $row->dob                               = $request->dob;
         $row->first_language                    = $request->first_language;
         $row->citizenship_country               = $request->citizenship_country;
         $row->passport                          = $request->passport;
         $row->gender                            = $request->gender;
         $row->marital                           = $request->marital;
         $row->address                           = $request->address;
         $row->city                              = $request->city;
         $row->country                           = $request->country;
         $row->state                             = $request->state;
         $row->zipcode                           = $request->zipcode;
         $row->email                             = $request->email;
         $row->tel                               = $request->tel;
         $row->status                            = 'active';
         $check                                  = $row->save();
 
         if ($check) {
             session()->flash('alert-success', ' General Information Update Store');
             return redirect()->route($this->view_path . '.edit_student_education', ['unique_id' => $unique_id]);
 
         } else {
             session()->flash('alert-danger', 'General Information can not be updated');
             return redirect()->route($this->view_path . '.index');
         }
 
     }

     public function editStudentEducation($unique_id)
     {
         $data['single'] = $this->application_education_information::where('unique_id', '=', $unique_id)->first();
         $data['university'] = University::orderBy('id', 'DESC')->where('status','active')->get();
         $data['unique_id'] = $unique_id;
         return view(($this->view_path . '.edit_student_education'), compact('data'));
 
     }

     public function updateStudentEducation(Request $request, $unique_id)
     {
         // $this->validate($request, [
         //     'country_of_education' =>                   'required',
         //     'highest_education' =>                      'required',
         //     'grade' =>                                  'required',
         //     'country_of_institute_scheme' =>            'required',
         //     'institue_name' =>                          'nullable',
         //     'loe' =>                                    'required',
         //     'instruct' =>                               'required',
         //     'admission' =>                              'required',
         //     'degreename' =>                             'required',
         //     'leave' =>                                  'required',
         //     'choose' =>                                 'required',
         //     'graduationdate' =>                         'required',
         //     'schooladdress' =>                          'required',
         //     'city' =>                                   'required',
         //     'schoolprovince' =>                         'required',
         //     'postalcode' =>                             'required',
         // ]);
 
         $row                                    =  $this->application_education_information::where('unique_id', '=', $unique_id)->first();
         $row->country_of_education              = $request->country_of_education;
         $row->highest_education                 = $request->highest_education;
         $row->grade                             = $request->grade;
         $row->country_of_institute_scheme       = $request->country_of_institute_scheme;
         $row->university                        = $request->university;
         $row->institue_name                     = $request->institue_name;
         $row->loe                               = $request->loe;
         $row->instruct                          = $request->instruct;
         $row->admission                         = $request->admission;
         $row->degreename                        = $request->degreename;
         $row->leave                             = $request->leave;
         $row->choose                            = $request->choose;
         $row->graduationdate                    = $request->graduationdate;
         $row->schooladdress                     = $request->schooladdress;
         $row->city                              = $request->city;
         $row->schoolprovince                    = $request->schoolprovince;
         $row->postalcode                        = $request->postalcode;
         $success                                = $row->save();
 
         if ($success) {
             session()->flash('alert-success', ' Education Information Successfully Store');
             return redirect()->route($this->view_path . '.edit_student_background', ['unique_id' => $unique_id]);
         } else {
             session()->flash('alert-danger', 'Education Information can not be updated');
             return redirect()->route($this->view_path . '.index');
         }
     }

     public function editStudentBackground($unique_id)
     {
         $data['single'] = $this->application_background_information::where('unique_id', '=', $unique_id)->first();
         $data['unique_id'] = $unique_id;
         return view(($this->view_path . '.edit_student_background'), compact('data'));
     }

     public function updateStudentBackground(Request $request, $unique_id)
     {
         // $this->validate($request, [
         //     'refused_visa' =>                    'required',
         //     'permit_visa' =>                     'required',
         //     'remarks' =>                         'nullable',
 
         // ]);
 
         $row                                    = $this->application_background_information::where('unique_id', '=', $unique_id)->first();
         $row->refused_visa                      = $request->refused_visa;
         $row->permit_visa                       = $request->permit_visa;
         $row->remarks                           = $request->remarks;
         $success                                = $row->save();
         if ($success) {
             session()->flash('alert-success', ' Background Information Successfully Store');
             return redirect()->route($this->view_path . '.edit_student_document',['unique_id' => $unique_id]);
         } else {
             session()->flash('alert-danger', 'Background Information can not be updated');
             return redirect()->route($this->view_path . '.index');
         }
     }

     public function editStudentDocument($unique_id)
     {
 
         $data['single'] = $this->application_document::where('unique_id', '=', $unique_id)->first();
         $data['unique_id'] = $unique_id;
         return view(($this->view_path . '.edit_student_document'), compact('data'));
     }

     public function updateStudentDocument(Request $request, $unique_id)
     {
        // $this->validate($request, [
        //     'slc_see_certificate' =>                    'required',
        //     'permit_visa' =>                     'required',
        //     'remarks' =>                         'nullable',

        // ]);

        $row                                    = $this->application_document::where('unique_id', '=', $unique_id)->first();
        if($request->hasFile('slc_see_certificate')){
            $row->slc_see_certificate = parent::uploadFile($this->folder, 'slc_see_certificate', $request);
        }
        if($request->hasFile('slc_see_marksheet')){
            $row->slc_see_marksheet = parent::uploadFile($this->folder, 'slc_see_marksheet', $request);
        }
        if($request->hasFile('slc_see_character_certificate')){
            $row->slc_see_character_certificate = parent::uploadFile($this->folder, 'slc_see_character_certificate', $request);
        }
        if($request->hasFile('higher_transcript')){
            $row->higher_transcript = parent::uploadFile($this->folder, 'higher_transcript', $request);
        }
        if($request->hasFile('higher_certificate')){
            $row->higher_certificate = parent::uploadFile($this->folder, 'higher_certificate', $request);
        }
        if($request->hasFile('bachelor_transcript')){
            $row->bachelor_transcript = parent::uploadFile($this->folder, 'bachelor_transcript', $request);
        }
        if($request->hasFile('bachelor_provisional')){
            $row->bachelor_provisional = parent::uploadFile($this->folder, 'bachelor_provisional', $request);
        }
        if($request->hasFile('bachelor_migration')){
            $row->bachelor_migration = parent::uploadFile($this->folder, 'bachelor_migration', $request);
        }
        if($request->hasFile('bachelor_character_certificate')){
            $row->bachelor_character_certificate = parent::uploadFile($this->folder, 'bachelor_character_certificate', $request);
        }
        if($request->hasFile('ielts_certificate')){
            $row->ielts_certificate = parent::uploadFile($this->folder, 'ielts_certificate', $request);
        }
        if($request->hasFile('passport')){
            $row->passport = parent::uploadFile($this->folder, 'passport', $request);
        }
      
        $success = $row->save();
        if ($success) {
            session()->flash('alert-success', ' Document Successfully Store');
            return redirect()->route($this->view_path . '.view_my_application',['unique_id' => $unique_id]);

        } else {
            session()->flash('alert-danger', 'Document can not be updated');
            return redirect()->route($this->view_path . '.index');
        }
    }

    public function viewMyApplication($unique_id)
    {
        $data['unique_id'] = $unique_id;
        $data['general'] = $this->application_general_information::where('unique_id', '=', $unique_id)->first();
        $data['education']    = $this->application_education_information::where('unique_id', '=', $unique_id)->first();
        $data['file']    = $this->application_document::where('unique_id', '=', $unique_id)->first();
        return view(($this->view_path . '.view_my_application'), compact('data'));
    }

    public function viewMyReport(Request $request){
        return view(($this->view_path . '.view_my_report'));

    }

 

    public function destroy($id)
    {
        $row    = $this->application_general_information::findOrFail($id);
        $this->application_general_information::destroy($id);

        
    }
}
