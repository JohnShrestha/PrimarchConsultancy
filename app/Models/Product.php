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
use App\Models\Category;


class Product extends DM_BaseModel
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at', 'created_at'];

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'products';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'product';
    protected $prefix_path_image = '/upload_file/product/';
    protected $prefix_path_file = '/upload_file/product/file/';

    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
        $this->folder_path_file = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }


    public function postCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function getData()
    {
        $data = Product::where('deleted_at', '=', null)
            ->orderBy('id', 'DESC')->get();
        return $data;
    }
    public function getCategory()
    {
        $data = DB::table('categories')->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();
        return $data;
    }

    public function storeData(Request $request, $category_id, $title, $description, $tags, $meta_keyword, $image, $file_title, $files, $status)
    {
        //dd($category_id, $title, $description, $tags, $meta_keyword, $image, $file_title,$files, $status,);
        // for thumbnail
        $post_unique_id = uniqid(Auth::user()->id . '_');

        if ($request->hasFile('image')) {
            $post_thumbnail = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image');
        } else {
            $post_thumbnail = null;
        }
        $array_file_title = array_filter($file_title);
        // for  multiple files
        if ($request->hasFile('files')) {
            $post_files = parent::uploadMultipleFiles($request, $this->folder_path_file, $this->prefix_path_file, 'files');
        } else {
            $post_files = null;
        }
        if (isset($post_files) && isset($array_file_title)) {
            $min = min(count($array_file_title), count($post_files));
            $array_file = array_map(null, array_slice($array_file_title, 0, $min), array_slice($post_files, 0, $min));
        } else {
            $array_file = null;
        }

        $posts[] = [
            'post_unique_id' => $post_unique_id,
            'category_id' => $category_id,
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbs' => $post_thumbnail,
            'description' => $description,
            'tags' => $tags,
            'meta_keyword' => $meta_keyword,
            'status' => 1,
            'created_at' => new DateTime(),
        ];

        if (isset($array_file)) {
            foreach ($array_file as $file_row)
                $files =  new File();
            $files->post_unique_id = $post_unique_id;
            $files->title = $file_row[0];
            $files->file = $file_row[1];
            $files->save();
        }

        if (Product::insert($posts)) {

            return true;
        } else {
            return false;
        }
    }

    public function updateData(Request $request,$post_unique_id, $category_id, $title, $description, $tags, $meta_keyword, $image, $file_title, $files, $status)
    {
        $product = Product::where('post_unique_id', '=', $post_unique_id)->first();
        //  dd($product);
        if ($request->hasFile('image')) {
            $file_path = getcwd(). $product->thumbs;
            if(is_file($file_path)){
                unlink($file_path);
            }
            $product->thumbs = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image');
        } 
        
        $array_file_title = array_filter($file_title);
        // for  multiple files
        if ($request->hasFile('files')) {
            $post_files = parent::uploadMultipleFiles($request, $this->folder_path_file, $this->prefix_path_file, 'files');
        } else {
            $post_files = null;
        }
        if (isset($post_files) && isset($array_file_title)) {
            $min = min(count($array_file_title), count($post_files));
            $array_file = array_map(null, array_slice($array_file_title, 0, $min), array_slice($post_files, 0, $min));
        } else {
            $array_file = null;
        }
            $product->category_id =  $category_id;
            $product->title =  $title;
            $product->slug =  Str::slug($title);
            // $product->thumbs =  $post_thumbnail;
            $product->description =  $description;
            $product->tags =  $tags;
            $product->meta_keyword =  $meta_keyword;
            $product->status =  $status;
            $product->updated_at =  new DateTime();
            $product->save();

        if (isset($array_file)) {
            foreach ($array_file as $file_row)
                $files =  new File();
            $files->post_unique_id = $post_unique_id;
            $files->title = $file_row[0];
            $files->file = $file_row[1];
            $files->save();
        }

       
    }
}
