<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Language extends DM_BaseModel
{
    use SoftDeletes;
    public $fillable = ['name', 'code', 'public', 'sort_order', 'default', 'image'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $softDelete = true;
    protected $model;
    protected $image_name = 'image';
    protected $folder = 'language';
    protected $folder_path;
    protected $image_prefix_path = '/upload_file/language/';

    public function __construct()
    {
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' .DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }

    public function storeData(Request $request, $lang_name, $lang_code, $lang_order, $lang_public, $lang_default, $lang_image)
    {
        $row = new Language;
        $row->name = $lang_name;
        $row->code = $lang_code;
        $row->status = $lang_public;
        $row->sort_order = $lang_order;
        $row->default = $lang_default;
        if ($request->hasFile($lang_image)) {
            $row->image = parent::uploadImage($request, $this->folder_path, $this->image_prefix_path, $this->image_name, '20', '20');
        }
        $status = $row->save();
        if (isset($status)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateData(Request $request, $id, $lang_name, $lang_code, $lang_order, $lang_public, $lang_default, $lang_image)
    {
        $row = Language::findOrFail($id);
        $row->name = $lang_name;
        $row->code = $lang_code;
        $row->status = $lang_public;
        $row->sort_order = $lang_order;
        $row->default = $lang_default;
        if ($request->hasFile($lang_image)) {
            $row->image = parent::uploadImage($request, $this->folder_path, $this->image_prefix_path, $this->image_name, '20', '20');
        }
        $status = $row->save();
        if (isset($status)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /** One to many relationship between language and post model */
    public function posts()
    {
        return $this->hasMany(Post::class, 'id');
    }
}
