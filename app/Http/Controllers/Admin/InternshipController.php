<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends DM_BaseController
{
    protected $panel = 'Internship';
    protected $base_route = 'admin.internship';
    protected $view_path = 'admin.internship';
    protected $model;
    protected $table;

    public function __construct(Internship $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        $data['category'] = $this->model->get();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }
    public function create()
    {
        return view(parent::loadView($this->view_path . '.create'));
    }

    public function store(Request $request)
    {
        $model                        = $this->model;
        $model->title                 = $request->title;
        $model->slug                  = \Str::slug($request->title);
        $model->unique_id             = env("APPLICATION_SERIAL", 2079) . "" . date("dHis") . rand(0000, 9999);
        $model->description           = $request->description;
        $model->status                = $request->status;
        $success                      = $model->save();
        if ($success) {
            session()->flash('alert-success', $this->panel . '  Successfully Added !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Added');
        }
        return redirect()->route($this->base_route . '.index');
    }

    public function edit($id)
    {
        $data['category'] = $this->model::where('id', '=', $id)->first();
        return view(parent::loadView($this->view_path . '.edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {
        $model                               = $this->model::where('id', '=', $id)->first();
        $model->title                        = $request->title;
        $model->slug                         = \Str::slug($request->title);
        $model->description                  = $request->description;
        $model->status                       = $request->status;
        $success                             = $model->update();
        if ($success) {
            session()->flash('alert-success', $this->panel . '  Successfully Updated !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Updated');
        }
        return redirect()->route($this->base_route . '.index');
    }

    public function status(Request $request)
    {
        $row                                    = $this->fiscalYear;
        $user                                   = $row->findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status added SuccessFully']);
    }

    public function destroy(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        if (!$data) {
            $request->session()->flash('success_message', $this->panel . 'does not exists.');
            return redirect()->route($this->base_route);
        }
        $data->destroy($id);
    }
}
