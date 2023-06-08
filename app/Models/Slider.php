<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends DM_BaseModel
{
    use HasFactory, SoftDeletes;
    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'slider';
    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'slider';
    protected $prefix_path_image = '/upload_file/slider/';
    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    public function getData()
    {
        return $this->orderBy('id', 'ASC')->where('deleted_at', '=', null)->get();
    }

    public function getRules()
    {
        $rules = array(
            'title' => 'required|string|max:225|min:5',
            'description' => 'sometimes',
            'order' => 'order',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:50000',
            'status' => 'required|boolean'
        );
        return $rules;
    }

    public function storeData(Request $request, $title, $description, $url, $image, $order, $status, $rows)
    {
        //  dd($title, $url, $image, $status, $rows);
        $slider =                    new Slider;
        $slider->title               = $title;
        $slider->description         = $description;
        $slider->order               = $order;
        $slider->status              = $status;

        if ($request->hasFile('image')) {
            $slider->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $slider->save();
        return true;
    }

    public function updateData(Request $request, $id, $title, $description, $url, $image, $order, $status, $rows)
    {
        $slider = Slider::findOrFail($id);
        $slider->title           = $title;
        $slider->description     = $description;
        $slider->url             = $url;
        $slider->order           = $order;
        $slider->status          = $status;
        if ($request->hasFile('image')) {
            $file_path = getcwd() . $slider->image;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $slider->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $slider->save();
        return true;
    }
}
