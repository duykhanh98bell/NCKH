<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Role;
use App\User;
use App\user_role;


class UserController extends Controller
{
    function contact()
    {
    	$listCon = User::all();
    	$user_role = user_role::join('roles','roles.id','=','user_roles.role_id')->get();
    	//dd($user_role);
    	return view('contact',[ 'listCon'=>$listCon, 'user_role'=>$user_role ]);
    }
    function create_user()
    {
    	$role = Role::all();
    	//dd($role);
    	return view('create-user',['role'=>$role]);
    }
    function post_register(Request $Request)
    {
    	//dd($Request->avatar);
    	$avatar = '';
    	if ($Request->has('avatar')) {
    		//$avatar = $Request->file('avatar')->store('avatar');
    		$file = $Request->avatar;
    		$file->move(base_path('/avatar'),$file->getClientOriginalName());
    		$avatar = $file->getClientOriginalName();
    	}

    	//dd($avatar);
    	User::create([
    		'name'=>$Request->name,
    		'avatar'=>$avatar,
    		'address'=>$Request->address,
    		'Phone'=>$Request->Phone,
    		'email'=>$Request->email,
    		'password'=>bcrypt($Request->password),
    	]);
    	
    	$id = User::where(['email'=>$Request->email])->first();
    	//dd($id);
    	user_role::create([
    		'role_id'=>$Request->user_role,
    		'user_id'=>$id->id
    	]);
    	//dd($role);
    	return redirect()->route('contact')->with('Tạo mới thành công');
    }
    function edit_user($id)
    {
    	$role = Role::all();
    	$user_role = user_role::where(['user_id'=>$id])->first();
    	//dd($user_role->role_id);
    	$find = User::find($id);
    	//dd($find);
    	return view('edit-user',['find'=>$find, 'role'=>$role, 'user_role'=>$user_role ]);
    }
    public function update_user($id, Request $Request)
    {
    	$UserChange = User::find($id);
    	$UserChange->update([
    		'name'=>$Request->name,
    		'address'=>$Request->address,
    		'phone'=>$Request->phone,
    	]);

    	$userroleChange = user_role::where(['user_id'=>$id])->first();
    	$userroleChange->update([
    		'role_id'=>$Request->user_role
    	]);
    	//dd($role);
    	return redirect()->route('contact')->with('Tạo mới thành công');
    }

}
