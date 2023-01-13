<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userList(){
        $users = User::orderBy('name', 'asc')->whereNot('name', 'admin')->get();
        return view('admin.user.list')->with('users', $users);
    }

    public function usercreate(){

        $roles = Role::orderBy('name', 'asc')->get();
        return view('admin.user.create')->with('roles', $roles);
    }


    public function userStore(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'mobile' => ['required'],
            'designation' => ['required'],
            'role_id' => ['required'],
            'password' => ['required',],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'role_id' => $request->role_id,
            'designation' => $request->designation,
          
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('userList')->with('success', 'User Created Successfully');
    }



    public function userEdit($id){
        $user = User::find($id);
        $roles = Role::orderBy('name', 'asc')->get();
        return view('admin.user.edit')->with('user', $user)->with('roles', $roles);
    }


    public function userUpdate(Request $request, $id){

        $user = User::find($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        
            'mobile' => ['required'],
            'designation' => ['required'],
            'role_id' => ['required'],
           
        ]);

        $user->update([
            'name' => $request->name,
        
            'mobile' => $request->mobile,
            'role_id' => $request->role_id,
            'designation' => $request->designation,
          
           
        ]);

        return redirect()->route('userList')->with('success', 'User Updated Successfully');
    }



}
