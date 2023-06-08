<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Blog extends DM_BaseModel
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at', 'created_at'];

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'blogs';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'blog';
    protected $slider = 'slider';
    protected $prefix_path_image = '/upload_file/blog/';
    protected $prefix_path_file = '/upload_file/blog/slider/';

    protected $fillable = [
        'title', 'order'
    ];


    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
        $this->folder_path_file = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR . $this->slider . DIRECTORY_SEPARATOR;
    }


    public function postCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
    public function postTypes()
    {
        return $this->belongsTo(Types::class, 'types_id');
    }

    public function LocationTypes()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }



    public function getData()
    {
        $data = Blog::where('deleted_at', '=', null)
            ->orderBy('id', 'DESC')->get();
        return $data;
    }
    public function getCategory()
    {
        $data = DB::table('blog_categories')->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();
        return $data;
    }

    public function storeData(Request $request, $category_id, $post_type, $type, $title,  $location_id, $area, $price, $description, $property_detail, $status, $featured, $image, $slider)
    {
        // dd($category_id, $post_type, $type, $title,  $location_id, $area,$price,$description, $property_detail, $status, $featured, $image, $slider);
        // for thumbnail
        $post_unique_id = uniqid(Auth::user()->id . '_');
        if ($request->hasFile('image')) {
            $post_thumbnail = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image');
        } else {
            $post_thumbnail = null;
        }
        // for  multiple files
        if ($request->hasFile('slider')) {
            $post_files = parent::uploadMultipleFiles($request, $this->folder_path_file, $this->prefix_path_file, 'slider');
        } else {
            $post_files = null;
        }

        $posts[] = [
            'post_unique_id'                     => $post_unique_id,
            'category_id'                        => $category_id,
            'types_id'                           => 1,
            'type'                               => $type,
            'title'                              => $title,
            'slug'                               => Str::slug($title),
            'thumbs'                             => $post_thumbnail,
            'location_id'                        => $location_id,
            'area'                               => $area,
            'price'                              => $price,
            'description'                        => $description,
            'property_detail'                    => $property_detail,
            'status'                             => $status,
            'featured'                           => $featured,
            'created_at'                         => new DateTime(),
        ];
        if (isset($post_files)) {
            foreach ($post_files as $post_files)
                File::create([
                    'post_unique_id' => $post_unique_id,
                    'title' =>  $title,
                    'file' => $post_files,
                ]);
        }
        if (Blog::insert($posts)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateData(Request $request, $post_unique_id, $category_id, $types_id, $type, $title,  $location_id, $area, $price, $description, $property_detail, $status, $featured, $image, $slider)
    {
        //dd($post_unique_id, $category_id, $types_id, $type, $title,  $location_id, $area, $price, $description, $property_detail, $status, $featured, $image, $slider);
        $blog = Blog::where('post_unique_id', '=', $post_unique_id)->first();
        //for thumbnail
        if ($request->hasFile('image')) {
            $file_path = getcwd() . $blog->thumbs;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $blog->thumbs = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image');
        }
        // for  multiple files
        if ($request->hasFile('slider')) {
            $post_files = parent::uploadMultipleFiles($request, $this->folder_path_file, $this->prefix_path_file, 'slider');
        } else {
            $post_files = null;
        }

        $blog->category_id                          =  $category_id;
        $blog->types_id                             =  $types_id;
        $blog->title                                =  $title;
        $blog->slug                                 =  Str::slug($title);
        $blog->type                                 =  $type;
        $blog->location_id                          =  $location_id;
        $blog->area                                 =  $area;
        $blog->price                                =  $price;
        $blog->description                          =  $description;
        $blog->property_detail                      =  $property_detail;
        $blog->status                               =  $status;
        $blog->featured                             =  $featured;
        $blog->updated_at                           =  new DateTime();
        $blog->save();

       if (isset($post_files)) {
            foreach ($post_files as $post_files)
                File::create([
                    'post_unique_id' => $post_unique_id,
                    'title' =>  $title,
                    'file' => $post_files,
                ]);
        }
    }
}
