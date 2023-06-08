<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Common;
use Illuminate\Http\Request;

class CommonController extends DM_BaseController
{
    protected $panel = 'Setting';
    protected $base_route = 'admin.setting';
    protected $view_path = 'admin.setting';
    protected $model;
    protected $table;

    public function __construct(Common $model)
    {
        $this->model = $model;
    }
    public function getFooterSetting()
    {
        // dd('test');
        $this->panel = 'Setting';
        $data['single'] = $this->model::where('id', '=', 1)->first();
        // $data['lang'] = $this->dm_post::getLanguage();
        // $titles = $this->model::where('common_unique_id', '=', 1)->get();
        // if(!isset($data['single']) || !is_object($data['single']) ) {
        //     $data = $this->model;
        //     $data->common_unique_id = 1;
        //     $data->save();
        // }
        return view(parent::loadView($this->view_path . '.footer.index'), compact('data'));
    }

    public function updateFooterSetting(Request $request, $id)
    {

        $link =  $this->model->findOrFail($id);
        $link->footer_first_title = $request->footer_first_title;
        $link->footer_first_description = $request->footer_first_description;
        $link->footer_second_title = $request->footer_second_title;
        $link->footer_second_description = $request->footer_second_description;
        $link->footer_third_title = $request->footer_third_title;
        $link->footer_third_description = $request->footer_third_description;
        $link->footer_fourth_title = $request->footer_fourth_title;
        $link->footer_fourth_description = $request->footer_fourth_description;
        $link->save();

        if ($link->save()) {
            session()->flash('alert-success', $this->panel . ' Successfully Updated');
        } else {
            return false;
        }
        return back();
    }
}
