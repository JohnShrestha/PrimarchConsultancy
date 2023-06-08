<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends DM_BaseController
{

    protected $panel = 'Message';
    protected $base_route = 'admin.message';
    protected $view_path = 'admin.message';
    protected $model;
    protected $table;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $data['rows'] = $this->model::all();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }

    public function show($id)
    {
        $row = $this->model::findOrFail($id);
        return view(parent::loadView($this->view_path.'.show'), compact('row'));
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

    public function deletedPost()
    {
        $data['rows'] = $this->model->where('deleted_at', '!=', null)->get();
        return view(parent::loadView($this->view_path . '.deleted'), compact('data'));
    }


    public function restore($id)
    {
        $data = $this->model::where('id', '=', $id)->get();
        foreach ($data as $row) {
            $row->deleted_at = null;
            $row->save();
        }
    }

    public function permanentDelete($id)
    {
        $row = $this->model::findOrFail($id);
        $file_path = getcwd() . $row->image;
        // dd($file_path);
        if (is_file($file_path)) {
            unlink($file_path);
        }
        foreach ($row as $row) {
            $this->model::where('id', '=', $id)->delete();
        }
    }
}
