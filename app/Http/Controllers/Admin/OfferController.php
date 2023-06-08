<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends DM_BaseController
{
    protected $panel = 'Offers';
    protected $base_route = 'admin.offer';
    protected $view_path = 'admin.offer';
    protected $model;
    protected $table;

    public function __construct(Offer $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        $data['rows'] = $this->model->getData();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }
    public function create()
    {
        return view(parent::loadView($this->view_path . '.create'));
    }

    public function store(Request $request)
    {
       //  dd($request->all());
        $request->validate([
            'title'        => 'required|max:225',
            'description'    => 'sometimes',
            'color'         => 'required',
            'image'       => 'required|mimes:jpeg,jpg,png,gif|max:50000',
            'status'      => 'required|boolean'
        ]);

        if ($this->model->storeData($request, $request->title, $request->description, $request->color, $request->image, $request->status)) {
            session()->flash('alert-success', $this->panel . '  Successfully Added !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Added');
        }
        return redirect()->route($this->base_route . '.index');
    }

    public function edit($id)
    {
        $data['rows'] = $this->model::where('id', '=', $id)->first();
        return view(parent::loadView($this->view_path . '.edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'           => 'required|max:225',
            'description'     => 'sometimes',
            'color'         => 'required',
            'image'           => 'sometimes|mimes:jpeg,jpg,png,gif|max:50000',
            'status'          => 'required|boolean'
        ]);
        if ($this->model->updateData($request, $id, $request->title,$request->description, $request->color,  $request->image, $request->status)) {
            session()->flash('alert-success', $this->panel . '  Successfully Updated !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Updated');
        }
        return redirect()->route($this->base_route . '.index');
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

    public function updateOrder(Request $request)
    {
        // /dd($request->order);
        $posts = $this->model::all();
        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order' => $order['position']]);
                }
            }
        }
        return response('Update Successfully.', 200);
    }
}
