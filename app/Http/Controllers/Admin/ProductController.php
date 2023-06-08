<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends DM_BaseController
{
    protected $panel = 'Product';
    protected $base_route = 'admin.product';
    protected $view_path = 'admin.product';
    protected $model;
    protected $table;

    public function __construct(Product $model, File $file)
    {
        $this->model = $model;
        $this->file_model = $file;

    }
    public function index()
    {

        $data['rows'] = $this->model->getData();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }
    public function create()
    {
        $data['rows'] = $this->model->getCategory();
        return view(parent::loadView($this->view_path . '.create'), compact('data'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // $request->validate([
        //     'category_id'=> 'required|max:255',
        //     'title' => 'required|max:225',
        //     'image' => 'required|mimes:jpeg,jpg,png,gif|max:50000',
        //     'status' => 'required|boolean'
        // ]);
        // dd($request->all());
        if ($this->model->storeData($request, $request->category_id, $request->title, $request->description, $request->tags, $request->meta_keyword, $request->image, $request->file_title, $request->files, $request->status)) {
            session()->flash('alert-success', $this->panel . '  Successfully Added !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Added');
        }
        return redirect()->route($this->base_route . '.index');
    }

    public function edit($post_unique_id)
    {
        $data['category'] = $this->model->getCategory();
        $data['file'] = $this->file_model::where('post_unique_id', '=', $post_unique_id)->get();
        $data['rows'] = $this->model::where('post_unique_id', '=', $post_unique_id)->first();
        return view(parent::loadView($this->view_path . '.edit'), compact('data'));
    }

    public function update(Request $request, $post_unique_id)
    {
        // $request->validate([
        //     'title' => 'required|max:225',
        //     'url' => 'sometimes|max:225',
        //     'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:50000',
        // ]);
        
        if ($this->model->updateData($request, $post_unique_id,$request->category_id, $request->title,$request->description, $request->tags, $request->meta_keyword, $request->image, $request->file_title,$request->files,$request->status,$request->rows)) {
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
        $file_path = getcwd() . $row->thumbs;
        // dd($file_path);
        if (is_file($file_path)) {
            unlink($file_path);
        }
        foreach ($row as $row) {
            $this->model::where('id', '=', $id)->delete();
        }
    }

    public function destroyFile($id) {
        dd('test');
        $this->tracker;
        $row = $this->file_model::findOrFail($id);
        $file_path = getcwd(). $row->file;
        if(is_file($file_path)){
            unlink($file_path);
        }
        $data = $this->file_model::destroy($id);
    }
}
