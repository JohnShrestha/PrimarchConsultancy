<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GeneralInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralInformationController extends User_BaseController
{
    protected $panel = 'Information';
    protected $base_route = 'user.general';
    protected $view_path = 'user.general';
    protected $model;
    protected $folder = 'document';
    protected $table;

    public function __construct(GeneralInformation $model)
    {
        $this->model = $model;
    }
    public function create()
    {
        return view('user.general.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' =>                                  ['required', 'max:255'],
            'mid_name' =>                                    ['required', 'max:255'],
            'last_name' =>                                   ['required', 'max:255'],
            'phone' =>                                       ['required', 'max:255'],
            'email' =>                                       ['required', 'max:255'],
            'dob' =>                                         ['required', 'max:255'],
            'education' =>                                   ['required', 'max:255'],
            'gender' =>                                      ['required', 'max:255'],
        ]);

        $row                                          = $this->model;
        $row->user_id                                 = Auth::user()->id;
        $row->unique_id                               = env("APPLICATION_SERIAL", 2078) . "" . date("dHis") . rand(0000, 9999);
        $row->first_name                              = $request->first_name;
        $row->mid_name                                = $request->mid_name;
        $row->last_name                               = $request->last_name;
        $row->phone                                   = $request->phone;
        $row->email                                   = $request->email;
        $row->dob                                     = $request->dob;
        $row->education                               = $request->education;
        $row->gender                                  = $request->gender;
        $success =                                     $row->save();
        
        if($success){
            session()->flash('alert-success', $this->panel.' Successfully Store');
        }
        else {
            session()->flash('alert-danger', $this->panel.' can not be updated');
        }
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view('user.general.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'first_name' =>                                  ['required', 'max:255'],
            'mid_name' =>                                    ['required', 'max:255'],
            'last_name' =>                                   ['required', 'max:255'],
            'phone' =>                                       ['required', 'max:255'],
            'email' =>                                       ['required', 'max:255'],
            'dob' =>                                         ['required', 'max:255'],
            'education' =>                                   ['required', 'max:255'],
            'gender' =>                                      ['required', 'max:255'],
        ]);

        $row                                          = $this->model->findOrFail($id);
        $row->user_id                                 = Auth::user()->id;
        $row->first_name                              = $request->first_name;
        $row->mid_name                                = $request->mid_name;
        $row->last_name                               = $request->last_name;
        $row->phone                                   = $request->phone;
        $row->email                                   = $request->email;
        $row->dob                                     = $request->dob;
        $row->education                               = $request->education;
        $row->gender                                  = $request->gender;
        $success =                                     $row->update();
        if($success){
            session()->flash('alert-success', $this->panel.' Successfully Updated');
        }
        else {
            session()->flash('alert-danger', $this->panel.' can not be updated');
        }
        return redirect()->route('user.index');
    }

    public function delete(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        if (!$data) {
            $request->session()->flash('success_message', $this->panel . 'does not exists.');
            return redirect()->route($this->base_route);
        }
       $success =  $data->delete();
        if($success){
            session()->flash('alert-success', $this->panel.' Successfully Deleted !');
        }
        else {
            session()->flash('alert-danger', $this->panel.' can not be updated');
        }
        return redirect()->route('user.index');
    }
}
