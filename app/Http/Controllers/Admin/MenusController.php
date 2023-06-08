<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eloquent\DM_Post;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MenusController extends DM_BaseController
{

    protected $panel = 'Menus';
    protected $base_route = 'admin.menu';
    protected $view_path = 'admin.menu';
    protected $model;
    protected $table;
    protected $post;

    public function __construct(Menu $model, DM_Post $dm_post)
    {
        $this->model = $model;
        $this->dm_post = $dm_post;
    }
    public function index()
    {
        $items = $this->model->menuTree();
        $menu = $this->model->getHtml($items);
        return view(parent::loadView($this->view_path . '.index'), compact('menu'));
    }
    public function create()
    {

        $data['type'] = array('Page', 'Post', 'Category', 'Custom Link');
        $data['lang']= $this->dm_post::getLanguage();
        $data['target'] = array('_self', '_blank');
        $data['posts'] = $this->dm_post::getAllPosts();
        $data['pages'] = $this->dm_post::getAllPages();
        $data['categories'] = $this->dm_post::getCategories();
        $data['parent_menu'] = $this->dm_post::getMenu();
        return view(parent::loadView($this->view_path . '.create'), compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'type' => 'required',
            'url'   => 'nullable|url',
            'name' => 'required|max:225',
            'target' => 'required',
            'status' => 'required|boolean',
        ]);
        $row = $this->model;
        $row->name = $request->name;
        $row->type = $request->type;

        if ($row->type == "Page") {
            $row->url = "/page/$request->page_unique_id";
            $row->parameter = $request->page_unique_id;
        } elseif ($row->type == "Post") {
            $row->url = "/post/$request->post_unique_id";

            $row->parameter = $request->post_unique_id;
        } elseif ($row->type == "Category") {
            $row->url = "/category/{$request->category_id}";
            $row->parameter = $request->category_id;
        } else {
            $row->url = $request->link;
        }

        $row->target = $request->target;
        $row->status = $request->status;
        $row->save();
        $menu_id = $row->id;
        foreach($request->rows as $row) {
            DB::table('menus_name')->insert(array([
                'menu_id' => $menu_id,
                'lang_id' => $row['lang_id'],
                'name' => $row['lang_name'],
            ]));
        }
        session()->flash('alert-success', $this->panel . ' Successfully Added');
        return redirect()->route($this->base_route . '.index');
    }

    public function edit($id)
    {
        $data['type'] = array('Page', 'Post', 'Category', 'Custom Link');
        $data['lang']= $this->dm_post::getLanguage();
        $data['target'] = array('_self', '_blank');
        $data['posts'] = $this->dm_post::getAllPosts();
        $data['pages'] = $this->dm_post::getAllPages();
        $data['categories'] = $this->dm_post::getCategories();
        $data['parent_menu'] = $this->dm_post::getMenu();
        $data['parent_menu'] = $this->dm_post::getMenu();

        $data['menus'] = $this->model::findOrFail($id);

        $menus_name = DB::table('menus_name')->where('menu_id', '=', $id)->get();
        $data['single_page'] = '';
        $data['single_post'] = '';
        $data['category'] = '';

        if(isset($data['menus']->parameter) && $data['menus']->type == "Page"){
            $data['single_page'] = $this->dm_post::getSinglePage($data['menus']->parameter);
        }
        elseif(isset($data['menus']->parameter) && $data['menus']->type == "Post"){
            $data['single_post'] = $this->dm_post::getSinglePost($data['menus']->parameter);
        }
        elseif(isset($data['menus']->parameter)  && $data['menus']->type == "Category"){
            $data['category'] = $this->dm_post::getCategory($data['menus']->parameter);
        }
        return view(parent::loadView($this->view_path . '.edit'), compact('data','menus_name'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'url'   => 'nullable|url',
            'name' => 'required|max:225',
            'target' => 'required',
            'status' => 'required|boolean',
        ]);
        $row = $this->model::findOrFail($id);
        $row->name = $request->name;
        $row->type = $request->type;

        if($row->type == "Page"){
            $row->url = "/page/$request->page_unique_id";
            $row->parameter = $request->page_unique_id;
        }
        elseif($row->type == "Post") {
            $row->url = "/post/$request->post_unique_id";
            $row->parameter = $request->post_unique_id;
        }
        elseif( $row->type == "Category") {
            $row->url = "/category/{$request->category_id}";
            $row->parameter = $request->category_id;
        }
        else {
            $row->url = $request->link;
        }
        $row->target = $request->target;
        $row->status = $request->status;
        $row->save();
        $menu_id = $row->id;
        foreach($request->rows as $row) {
            $menu_name =  DB::table('menus_name')->where('menu_id', $id)->where('lang_id', $row['lang_id'])->first();
            if(isset($menu_name)){
                DB::table('menus_name')->where('menu_id', $id)->where('lang_id', $row['lang_id'])->update([
                    'menu_id' => $id,
                    'lang_id' => $row['lang_id'],
                    'name' => $row['lang_name'],
                ]);
            }else {
                DB::table('menus_name')->where('menu_id', $id)->where('lang_id', $row['lang_id'])->insert([
                    'menu_id' => $id,
                    'lang_id' => $row['lang_id'],
                    'name' => $row['lang_name'],
                ]);
            }
        }
        session()->flash('alert-success', $this->panel.' Successfully Updated');
        return redirect()->route($this->base_route.'.index');
    }

    public function status(Request $request)
    {
        $row                                    = $this->fiscalYear;
        $user                                   = $row->findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status added SuccessFully']);
    }

    public function destroy(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        if (!$data) {
            $request->session()->flash('success_message', $this->panel . 'does not exists.');
            return redirect()->route($this->base_route);
        }
        $data->destroy($id);
    }



    public function deletedPost()
    {
        $data['rows'] = $this->model->where('deleted_at', '!=', null)->get();
        return view(parent::loadView($this->view_path . '.deleted'), compact('data'));
    }


    public function restore($id)
    {
        $data = $this->model::where('id', '=', $id)->get();
        foreach ($data as $row) {
            $row->deleted_at = null;
            $row->save();
        }
    }

    public function permanentDelete($id)
    {
        $row = $this->model::findOrFail($id);
        $file_path = getcwd() . $row->thumbs;
        // dd($file_path);
        if (is_file($file_path)) {
            unlink($file_path);
        }
        foreach ($row as $row) {
            $this->model::where('id', '=', $id)->delete();
        }
    }

    public function destroyFile($id)
    {
        dd('test');
        $this->tracker;
        $row = $this->file_model::findOrFail($id);
        $file_path = getcwd() . $row->file;
        if (is_file($file_path)) {
            unlink($file_path);
        }
        $data = $this->file_model::destroy($id);
    }

    /** Store the order from ajax */
    public function storeOrder(Request $request){
        if($request->ajax()) {
            $data = json_decode($_POST['data']);
            $readbleArray = parent::parseJsonArray($data);
            $i = 0;
            foreach( $readbleArray as $row) {
                $i++;
                $menu = Menu::findOrFail($row['id']);
                $menu->parent_id = $row['parentID'];
                $menu->order = $i;
               $menu->save();
            }
            return var_dump(Response::json($readbleArray));
        }
    }
}
