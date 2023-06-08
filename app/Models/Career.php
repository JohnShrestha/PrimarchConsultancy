<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Career extends Model
{
    use HasFactory;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'careers';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'careers';
    protected $prefix_path_image = '/upload_file/careers/';
    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }
    public function getData()
    {
        $data = Career::orderBy('id', 'DESC')->get();
        return $data;
    }

    public function storeData(Request $request, $title, $category, $level, $experience, $number, $time, $salary, $apply_before, $status)
    {
        // dd($title, $category, $experience, $number, $time, $salary, $apply_before, $status);
        $job_id = env("APPLICATION_SERIAL", 2079) . "" . date("dH") . rand(0000, 9999);
        $carrer =                         new Career;
        $carrer->job_id                  = $job_id;
        $carrer->title                   = $title;
        $carrer->category                = $category;
        $carrer->level                   = $level;
        $carrer->experience              = $experience;
        $carrer->number                  = $number;
        $carrer->time                    = $time;
        $carrer->salary                  = $salary;
        $carrer->apply_before            = $apply_before;
        $carrer->status                  = $status;
        $carrer->save();
        return true;
    }

    public function updateData(Request $request, $id, $name, $url, $image, $description, $status)
    {
        $clients = Career::findOrFail($id);
        $clients->name           = $name;
        $clients->url             = $url;
        $clients->description    = $description;
        $clients->status          = $status;
        if ($request->hasFile('image')) {
            $file_path = getcwd() . $clients->image;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $clients->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $clients->save();
        return true;
    }
}
