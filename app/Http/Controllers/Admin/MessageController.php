<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralInformation;
use Illuminate\Http\Request;

class MessageController extends DM_BaseController
{

    protected $panel = 'Message';
    protected $base_route = 'admin.message';
    protected $view_path = 'admin.message';
    protected $model;
    protected $table;

    public function __construct(Popup $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $data['message'] = GeneralInformation::orderBy('id', 'DESC')->get();
        return view(($this->view_path . '.index'), compact('data'));
    }
}
