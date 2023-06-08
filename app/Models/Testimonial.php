<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Testimonial extends DM_BaseModel
{
    use HasFactory, SoftDeletes;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'testimonials';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'testimonial';
    protected $prefix_path_image = '/upload_file/testimonial/';
    public function __construct() {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    public function storeData(Request $request, $name, $position, $description, $image, $status) {
        // dd($name, $description, $image, $status);
        $testimonial =                       new Testimonial;
        $testimonial->name                   = $name;
        $testimonial->position                = $position;
        $testimonial->description            = $description;
        $testimonial->alt_text               = $name;
        $testimonial->status                 = $status;
        if($request->hasFile('image')){
            $testimonial->image = parent::uploadImage($request, $this->folder_path_image ,$this->prefix_path_image,'image','','');  
        }
        $testimonial->save();
        return true;
    }

    public function updateData(Request $request, $id, $name, $position, $description, $image, $status) {
        // dd($name, $description, $image, $status);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name                   = $name;
        $testimonial->position               = $position;
        $testimonial->description            = $description;
        $testimonial->alt_text               = $name;
        $testimonial->status                 = $status;
        if($request->hasFile('image')){
            $file_path = getcwd(). $testimonial->image;
             if(is_file($file_path)){
                 unlink($file_path);
             }
            $testimonial->image = parent::uploadImage($request, $this->folder_path_image ,$this->prefix_path_image,'image','','');  
        }
        $testimonial->save();        
        return true;
    }

}
