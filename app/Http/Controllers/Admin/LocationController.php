<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends DM_BaseController
{
    protected $panel = 'Location';
    protected $base_route = 'admin.location';
    protected $view_path = 'admin.location';
    protected $accounttype;
    protected $table;

    public function __construct(Location $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        $data['rows'] =  $this->model->getData();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }

    public function store(Request $request)
    {
        $model =  $this->model;
        $model->title  = $request->title;
        $success = $model->save();
        return response()->json($success);
    }

    public function status(Request $request)
    {
        $row                                    = $this->loantype;
        $user                                   = $row->findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Account Types added SuccessFully']);
    }

    public function destroy(Request $request, $id)
    {
        //dd($request->id);
        $data =  $this->model->findOrFail($id);
        if (!$data) {
            $request->session()->flash('success_message', $this->panel . 'does not exists.');
            return redirect()->route($this->base_route);
        }
        $data->destroy($id);
    }
}
