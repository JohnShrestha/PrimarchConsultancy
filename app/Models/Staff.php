<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Staff extends DM_BaseModel
{
    use HasFactory, SoftDeletes;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'staff';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'staff';
    protected $prefix_path_image = '/upload_file/staff/';
    public function __construct()
    {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    public function storeData(Request $request, $country_member, $name, $designation, $description, $facebook, $twitter, $insta, $image, $status)
    {
        // dd($name, $designation, $facebook , $twitter, $insta, $image, $status  );
        $testimonial =                                            new Staff;
        $testimonial->country_member                              = $country_member;
        $testimonial->name                                        = $name;
        $testimonial->designation                                 = $designation;
        $testimonial->social_profile_fb                           = $facebook;
        $testimonial->social_profile_twitter                      = $twitter;
        $testimonial->social_profile_insta                        = $insta;
        $testimonial->status                                      = $status;
        if ($request->hasFile('image')) {
            $testimonial->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $testimonial->save();
        return true;
    }

    public function updateData(Request $request, $id, $country_member, $name, $designation, $description ,$facebook, $twitter, $insta, $image, $status)
    {
        // dd($name, $designation, $facebook , $twitter, $insta, $image, $status  );

        $testimonial                                              = Staff::findOrFail($id);
        $testimonial->country_member                              = $country_member;
        $testimonial->name                                        = $name;
        $testimonial->designation                                 = $designation;
        $testimonial->description                                 = $description;
        $testimonial->social_profile_fb                           = $facebook;
        $testimonial->social_profile_twitter                      = $twitter;
        $testimonial->social_profile_insta                        = $insta;
        $testimonial->status                                      = $status;
        if ($request->hasFile('image')) {
            $file_path = getcwd() . $testimonial->image;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $testimonial->image = parent::uploadImage($request, $this->folder_path_image, $this->prefix_path_image, 'image', '', '');
        }
        $testimonial->save();
        return true;
    }
}
