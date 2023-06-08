<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends User_BaseController
{
    protected $panel = 'Applicant';
    protected $base_route = 'user.general';
    protected $view_path = 'user.general';
    protected $model;
    protected $folder = 'document';
    protected $table;

    
    public function index(){
        // $data['general'] = $this->model->where("user_id",request()->user()->id)->get();
        // $data['application'] =  DB::table('application_general_information')->where('user_id', Auth::user()->id)->get();
        return view('user.index');
    }
}
