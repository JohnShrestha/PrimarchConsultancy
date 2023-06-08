<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\DM_BaseController;
use App\Models\Eloquent\DM_Post;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Clients;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Gallery;
use App\Models\Location;
use App\Models\Menu;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Program;
use App\Models\Section;
use App\Models\Setting;
use App\Models\Staff;
use App\Models\Subscriber;
use App\Models\Testimonial;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Constraint\Count;

class SiteController extends DM_BaseController
{
    protected $panel;
    protected $base_route = 'site';
    protected $view_path = 'site';
    protected $model;
    protected $table;
    protected $contact_email;

    public function __construct(Request $request, DM_Post $dm_post, Setting $setting)
    {
        $this->dm_post = $dm_post;
        $this->email = $setting::pluck('site_email')->first();
    }

    //Home Page
    public function index()
    {
        {
            $data['menu'] = Menu::tree();
            // dd($data['menu']);
            $data['banner'] = Banner::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('order', 'desc')->get();
            $data['staff'] = Staff::where('status', '=', 1)->orderBy('id', 'desc')->get();
            $data['our-services'] = Section::where('status', '=', 1)->orderBy('order', 'desc')->get();
            $data['testimonial'] = Testimonial::where('status', '=', 1)->orderBy('id', 'desc')->get();
            // $data['client'] = Clients::where('status', '=', 1)->orderBy('id', 'desc')->get();
            $data['location'] = Location::where('status', '=', 1)->orderBy('id', 'desc')->get();
            $data['types']    = Types::orderBy('id', 'desc')->get();
            $data['featured_pages'] = $this->dm_post::featuredPageList();
            $data['category'] = $this->dm_post::getCategoryList();
            foreach ($data['category'] as $row) {
                $data['cat_post_' . $row->title] = $this->dm_post::categoryPost($row->id, '6');
                // $data['cat_post_new'. $row->name] = $this->dm_post::categoryPostNew($row->id, $this->lang_id);
                $data['cat_' . $row->title] = $row->id;
            }
            // dd($data);

            return view(parent::loadView($this->view_path . '.index'), compact('data'));
        }
    }


    //About Us
    public function aboutUs()
    {
        $data['menu'] = Menu::tree();
        $data['featured_pages'] = $this->dm_post::featuredPageList();
        $data['about'] = Section::where('status', '=', 1)->where('position', 'about')->orderBy('order', 'desc')->get();
        return view(parent::loadView($this->view_path . '.about'), compact('data'));
    }

    //ourvalues
    public function ourvalues()
    {
        $data['menu'] = Menu::tree();
        $data['our-value'] = Section::where('status', '=', 1)->where('position', 'our-value')->orderBy('order', 'desc')->get();
        return view(parent::loadView($this->view_path . '.our-values'), compact('data'));
    }

    //principles
    public function principles()
    {
        $data['menu'] = Menu::tree();
        $data['principles'] = Section::where('status', '=', 1)->where('position', 'our-principles')->orderBy('order', 'desc')->get();
        return view(parent::loadView($this->view_path . '.principles'), compact('data'));
    }

    //Staff
    public function staff()
    {
        $data['menu'] = Menu::tree();
        $data['india_team'] = Staff::where('status', '=', 1)->where('country_member', 'india-team-member')->orderBy('id', 'desc')->get();
        $data['nepal_team'] = Staff::where('status', '=', 1)->where('country_member', 'nepal-team-member')->orderBy('id', 'desc')->get();
        return view(parent::loadView($this->view_path . '.staff'), compact('data'));
    }

    //Show Post
    public function showPost($post_unique_id)
    {
        $data['menu'] = Menu::tree();
        $data['row'] = $this->dm_post::getSinglePost($post_unique_id);
        $data['file'] = $this->dm_post::getFile($post_unique_id);
        $data['category'] = $this->dm_post::getCategoryList();
        foreach ($data['category'] as $row) {
            $data['cat_post_' . $row->title] = $this->dm_post::categoryPost($row->id, '6');
            // $data['cat_post_new'. $row->name] = $this->dm_post::categoryPostNew($row->id, $this->lang_id);
            $data['cat_' . $row->title] = $row->id;
        }
        return view(parent::loadView($this->view_path . '.single'), compact('data'));
    }

    //Show Staff Detail
    public function showStaff($id)
    {
        $data['menu'] = Menu::tree();
        $data['row'] = $this->dm_post::getStaffDetail($id);
        //dd($data['row']);
        return view(parent::loadView($this->view_path . '.staff_detail'), compact('data'));
    }
    //Show Page
    public function showPage($post_unique_id)
    {
        $data['menu'] = Menu::tree();
        $data['row'] = $this->dm_post::getSinglePage($post_unique_id);
        return view(parent::loadView($this->view_path . '.single'), compact('data'));
    }

    //to show post category with post archive
    public function showCategoryPost($category_id)
    {
        $data['menu'] = Menu::tree();
        $data['rows'] = $this->dm_post::categoryBasedPost($category_id);
        $data['cat_count'] = count($data['rows']);
        return view(parent::loadView($this->view_path . '.category'), compact('data'));
    }

    //Contact Us
    public function contact()
    {
        $data['menu'] = Menu::tree();
        return view(parent::loadView($this->view_path . '.contact'), compact('data'));
    }
    public function services()
    {
        $data['menu'] = Menu::tree();
      $data['services'] = Section::all();
        return view(parent::loadView($this->view_path . '.services'), compact('data'));
    }


    public function testimonials()
    {

        $data['testimonials'] = Testimonial::all();
        return view(parent::loadView($this->view_path . '.testimonials'), compact('data'));
    }

    //album
    public function gallery()
    {
        $data['menu'] = Menu::tree();
        $data['gallery'] = Gallery::where('status', '=', 1)->orderBy('id', 'desc')->get();
        return view(parent::loadView($this->view_path . '.gallery'), compact('data'));
    }

    public function search(Request $request)
    {
       // dd($request->all());
        $data['menu'] = Menu::tree();
        $data['location_id'] = $request->get('location_id');
        $data['category_id'] = $request->get('category_id');
        $data['types_id'] = $request->get('types_id');
        $data['rows'] = Blog::where('location_id', 'LIKE', '%' . $data['location_id'] . '%')
            ->Where('category_id', 'LIKE', '%' . $data['category_id'] . '%')
            ->Where('types_id', 'LIKE', '%' . $data['types_id'] . '%')
            ->get();
        //dd($data['rows']);
        $data['cat_count'] = count($data['rows']);
        return view(parent::loadView($this->view_path . '.search'), compact('data'));
    }

    // ----- Sanitizing Laravel Request Inputs -----
    function rip_tags($string)
    {
        // ----- remove HTML TAGs -----
        $string = preg_replace('/<[^>]*>/', ' ', $string);
        // ----- remove control characters -----
        $string = str_replace("\r", '', $string);    // --- replace with empty space
        $string = str_replace("\n", ' ', $string);   // --- replace with space
        $string = str_replace("\t", ' ', $string);   // --- replace with space
        // ----- remove multiple spaces -----
        $string = trim(preg_replace('/ {2,}/', ' ', $string));
        return $string;
    }
    /** Store Message From Contact Us */

    public function storeMessage(Request $request)
    {
       // dd($request->all());
        $row = new Contact();
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255',
        //     'number' => 'required|max:255',
        //     'subject' => 'sometimes|max:255',
        //     'address' => 'sometimes|max:255',
        //     'message' => 'sometimes',
        // ]);
        $row->name           = $request->name;
        $row->email          = $request->email;
        $row->number         = $request->phone;
        $row->subject        = $request->subject;
        $row->message      = $request->message;
        $success           =  $row->save();

        if ($success) {
            session()->flash('alert-success', $this->panel . ' Message Successfully send.');
        } else {
            session()->flash('alert-danger', $this->panel . ' Something error !.');
        }
        // return view('admin.message.index', compact('data'));
        return redirect()->route($this->base_route.'.contact');
    }

    public function storeSubscriber(Request $request){
        $row = new Subscriber();
        $request ->validate([
            'title' =>'required|max:255',

        ]);
        $row->title       =$request->title;
        $success          =$row->save();
        $request->session()->flash('success_message', $this->panel . ' Message is successfully send.');
        return back();
    }

    /** Donate Message  */

    public function Donate(Request $request)
    {

        // $row = new Contact();
        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'address' => 'sometimes|max:255',
            'purpose' => 'sometimes',
            'county'  => 'sometimes',
        ]);

        $data = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'purpose' => $request->purpose,
            'county' => $request->county,
        ];

        // Sending Mail to Owner
        Mail::send('site.emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to($this->email);
            $message->subject('Mail From CSD Website');
        });
        // Sending Response To Sender
        Mail::send('site.emails.response', $data, function ($message) use ($data) {
            $message->from($this->email);
            $message->to($data['email']);
            $message->subject('Thankyou !! from CSD');
        });
    }
}
