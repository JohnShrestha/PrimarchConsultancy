<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Popup extends DM_BaseModel
{
    use HasFactory;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'popups';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'popup';
    protected $prefix_path_image = '/upload_file/popup/';
    public function __construct() {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    public function storeData(Request $request, $title, $url, $image, $order, $status, $rows) {
        // dd($title, $url, $image, $status, $order, $rows);
        $popup =                    new Popup;
        $popup->title               = $title;
        $popup->url                 = $url;
        $popup->order               = $order;
        $popup->status              = $status;
        if($request->hasFile('image')){
            $popup->image = parent::uploadImage($request, $this->folder_path_image ,$this->prefix_path_image,'image','','');  
          //  dd($popup->image);
        }
        $popup->save();
        return true;
    }

    public function updateData(Request $request, $id, $title, $url, $image, $order, $status, $rows) {
        $banner = Popup::findOrFail($id);
        $banner->title           = $title;
        $banner->url             = $url;
        $banner->order           = $order;
        $banner->status          = $status;
        if($request->hasFile('image')){
            $file_path = getcwd(). $banner->image;
             if(is_file($file_path)){
                 unlink($file_path);
             }
            $banner->image = parent::uploadImage($request, $this->folder_path_image ,$this->prefix_path_image,'image','','');  
        }
        $banner->save();        
        return true;
    }

}
