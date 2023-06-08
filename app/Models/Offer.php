<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Offer extends DM_BaseModel
{
    use HasFactory;

    protected $panel;
    protected $base_route;
    protected $view_path;
    protected $model;
    protected $table = 'offers';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'offers';
    protected $prefix_path_image = '/upload_file/offers/';
    public function __construct() {
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    protected $fillable = [
        'title', 'order','description'
    ];

    public function getData()
    {
        $data = Offer::
            orderBy('order', 'ASC')
            ->select('id','title','image','order','status','created_at')
            ->get();
        return $data;
    }

    public function storeData(Request $request, $title, $description, $color, $image, $status) {
        // dd($name, $description, $image, $status);
        $offer =                             new Offer;
        $offer->title                        = $title;
        $offer->description                  = $description;
        $offer->color                        = $color;
        $offer->status                       = $status;
        if($request->hasFile('image')){
            $offer->image = parent::uploadImage($request, $this->folder_path_image ,$this->prefix_path_image,'image','','');  
        }
        $offer->save();
        return true;
    }

    public function updateData(Request $request, $id, $title, $description, $color, $image, $status) {
        // dd($name, $description, $image, $status);

        $offer                               = Offer::findOrFail($id);
        $offer->title                        = $title;
        $offer->description                  = $description;
        $offer->color                        = $color;
        $offer->status                       = $status;
        if($request->hasFile('image')){
            $file_path = getcwd(). $offer->image;
             if(is_file($file_path)){
                 unlink($file_path);
             }
            $offer->image = parent::uploadImage($request, $this->folder_path_image ,$this->prefix_path_image,'image','','');  
        }
        $offer->save();        
        return true;
    }

}
