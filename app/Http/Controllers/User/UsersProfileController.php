<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersProfileController extends User_BaseController
{
    protected $panel = ' User Profile';
    protected $base_route = 'user.profile';
    protected $view_path = 'user.profile';
    protected $model;
    protected $folder = 'profile';
    protected $table;

    public function __construct(User $model)
    {
        $this->model = $model;
        $this->folder = getcwd() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;

    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        $data = $this->model::findOrFail(Auth::user()->id);
        dd($data);
        return view('user.general.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
         $request->validate([
            'name' =>                                        ['required', 'max:255'],
            'mobile' =>                                      ['required', 'max:255'],
            'email' =>                                       ['required', 'max:255'],
            'avatar' =>                                      ['sometimes', 'max:255'],
        ]);

        $row                                          = $this->model->findOrFail(Auth::user()->id);
        $row->name                                    = $request->name;
        $row->mobile                                  = $request->mobile;
        $row->email                                   = $request->email;
        $file_path = $this->folder. $row->avatar;
       
        if($request->hasFile('avatar')){
            if(is_file($file_path)){
                unlink($file_path);
            }
            $row->avatar = parent::uploadFile($this->folder, 'avatar', $request);
        }
        $success =  $row->update();
        if($success){
            session()->flash('alert-success', $this->panel.' is Updated');
        }
        else {
            session()->flash('alert-danger', $this->panel.' can not be updated');
        }
        return redirect()->back();
    }

    public function show()
    {
        $data['profile'] = $this->model::findOrFail(Auth::user()->id);
        return view('user.profile.edit', compact('data'));
    }
    
    /**'
     * changed password for individual user 
     */

    public function passwordChange(Request $request){
        $request->validate([
            'current_password' =>                            ['required', 'max:255'],
            'password' =>                                    ['required', 'string', 'min:5']
        ]);
        if(Hash::check($request->current_password, Auth::user()->password) ){
            $row = $this->model::findOrFail(Auth::user()->id);
            $row->password = Hash::make($request->password);
            $row->save();
            session()->flash('alert-success', 'Password changed successfully.');
            Auth::logout();
            return redirect()->route('login');
        }
        else{
            session()->flash('alert-warning', 'Password did not match.');
            return redirect()->back();
        }
    }

    public function recovery(){
        return view('admin.auth.two-factor-recovery');
    }

    
}
