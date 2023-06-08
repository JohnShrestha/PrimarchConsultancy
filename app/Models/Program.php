<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Program extends DM_BaseModel
{
    use HasFactory;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'programs';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'programs';
    protected $prefix_path_image = '/upload_file/programs/';
    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    protected $fillable = [
        'title', 'age','order', 'image'
    ];

    public function getData()
    {
        $data = Program::orderBy('order', 'ASC')
            ->select('id', 'title', 'age', 'order','image', 'status', 'created_at')
            ->get();
        return $data;
    }

    public function storeData(Request $request, $title, $age, $image, $status)
    {
        // dd($name, $description, $image, $status);
        $program =                             new Program;
        $program->title                        = $title;
        $program->age                          = $age;
        $program->status                       = $status;
        if ($request->hasFile('image')) {
            $program->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $program->save();
        return true;
    }

    public function updateData(Request $request, $id, $title, $age, $image, $status)
    {
        // dd($name, $description, $image, $status);

        $program                               = Program::findOrFail($id);
        $program->title                        = $title;
        $program->age                          = $age;
        $program->status                       = $status;
        if ($request->hasFile('image')) {
            $file_path = getcwd() . $program->image;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $program->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $program->save();
        return true;
    }
}
