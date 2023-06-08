<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $table = 'menus';

    /** Navigation for Frontend */
    public static function tree() {
        $data['rows'] = DB::table('menus')->where('status', '=', 1)->orderBy('order')
                    ->join('menus_name', 'menus.id', '=', 'menus_name.menu_id')
                    //->where('menus_name.lang_id', '=', $lang_id)
                    ->select('menus.*', 'menus_name.lang_id', 'menus_name.name as menu_name')->orderBy('order')
                    ->get();
        $ref = [];
        $items = [];
        foreach($data['rows'] as $row){
            $thisRef = &$ref[$row->id];
            $thisRef['name'] = $row->name;
            $thisRef['order'] = $row->order;
            $thisRef['parent_id'] = $row->parent_id;
            $thisRef['id'] = $row->id;
            $thisRef['url'] = $row->url;
            $thisRef['target'] = $row->target;
            $thisRef['menu_name'] = $row->menu_name;
            if($row->parent_id == 0) {
                $items[$row->id] = &$thisRef;
            } else {
                $ref[$row->parent_id]['child'][$row->id] = &$thisRef;
            }
        }
        return $items;
    }

    /** Dashboard Menu Tree */
    public function menuTree()
    {
        $data['rows'] = Menu::orderBy('order')->get();
        // var_dump($data['rows']);
        $ref = [];
        $items = [];
        foreach($data['rows'] as $row){
            $thisRef = &$ref[$row->id];
            $thisRef['name'] = $row->name;
            $thisRef['parent_id'] = $row->parent_id;
            $thisRef['status'] = $row->status;
            $thisRef['id'] = $row->id;
            if($row->parent_id == 0) {
                $items[$row->id] = &$thisRef;
            } else {
                $ref[$row->parent_id]['child'][$row->id] = &$thisRef;
            }
        }
        // dd($items);
        return $items;
    }

    /**
     * Build Menu | Admin Panel
     */
    public function buildMenu($items, $class = 'dd-list')
    {
        // dd($items);
        $html = "<ol class=\"" . $class . "\" >";
        foreach($items as $key=>$value) {
            $html.= '<li class="dd-item dd3-item" data-id="'.$value['id'].'">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content"><span id="label_show'.$value['id'].'">'.$value['name'].'</span>
                            <span class="span-right">
                                <span id="link_show'.$value['id'].'">Status:'.$value['status'].'</span>
                                &nbsp;&nbsp;
                                <a class="btn btn-warning" id="'.$value['id'].'" label="'.$value['name'].'" href="\admin/menu/edit/'. $value['id'].'" ><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger del-button" id="'.$value['id'].'" ><i class="fa fa-trash-o"></i></a>
                            </span>
                        </div>';
            if(array_key_exists('child',$value)) {
                $html .= self::buildMenu($value['child'],'dd-list');
            }
                $html .= "</li>";
        }
        $html .= "</ol>";
        // dd($html);
        return $html;
    }

    // Getter for the HTML menu builder | Admin Panel
    public function getHTML($items)
    {
        return $this->buildMenu($items);
    }
}
