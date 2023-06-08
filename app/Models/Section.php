<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Section extends DM_BaseModel
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at', 'created_at'];

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'sections';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'section';
    protected $prefix_path_image = '/upload_file/section/';
    protected $prefix_path_file = '/upload_file/section/file/';

    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
        $this->folder_path_file = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    protected $fillable = [
        'title', 'order'
    ];

    public function getData()
    {
        $data = Section::
            orderBy('order', 'ASC')
            ->select('id','title','image','position','order','status','created_at','visit_no')
            ->get();
        return $data;
    }

    public function storeData(Request $request, $position, $title, $description, $image, $status)
    {
         //dd($position, $title, $description, $order, $image, $status);
        // for thumbnail
        if ($request->hasFile('image')) {
            $image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image');
        } else {
            $image = null;
        }

        $posts[] = [
            'position' => $position,
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'status' => 1,
            'created_at' => new DateTime(),
        ];


        if (Section::insert($posts)) {

            return true;
        } else {
            return false;
        }
    }

    public function updateData(Request $request, $id, $position, $title, $description, $image, $status)
    {
        //dd($position, $title, $description, $image, $status);

        $section = Section::findOrFail($id);
        //  dd($product);
        if ($request->hasFile('image')) {
            $file_path = getcwd() . $section->image;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $section->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image');
        }

        $section->position =  $position;
        $section->title =  $title;
        // $product->thumbs =  $post_thumbnail;
        $section->description =  $description;
        $section->status =  $status;
        $section->updated_at =  new DateTime();
        $section->save();

       
    }
}
