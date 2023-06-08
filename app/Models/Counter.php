<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Counter extends DM_BaseModel
{
    use HasFactory;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'counters';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'counters';
    protected $prefix_path_image = '/upload_file/counters/';
    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    public function storeData(Request $request, $happy_student, $teacher, $years, $community, $status, $rows)
    {
        //  dd($happy_student, $teacher, $years, $community, $rows);
        $counter =                     new Counter;
        $counter->happy_student           = $happy_student;
        $counter->teacher                 = $teacher;
        $counter->years                   = $years;
        $counter->community               = $community;
        $counter->status                  = $status;

        // if ($request->hasFile('image')) {
        //     $banner->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        // }
        $counter->save();
        return true;
    }

    public function updateData(Request $request, $id, $happy_student, $teacher, $years, $community, $status, $rows)
    {
        $counter                          = Counter::findOrFail($id);
        $counter->happy_student           = $happy_student;
        $counter->teacher                 = $teacher;
        $counter->years                   = $years;
        $counter->community               = $community;
        $counter->status                  = $status;
        // if ($request->hasFile('image')) {
        //     $file_path = getcwd() . $banner->image;
        //     if (is_file($file_path)) {
        //         unlink($file_path);
        //     }
        //     $banner->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        // }
        $counter->save();
        return true;
    }
}
