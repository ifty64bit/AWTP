<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getLogin(){
        return view('login');
    }

    function login(Request $req){
        $req->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:5',

        ]);

        $user= User::where('email',$req->email)->first();
        if($user){
            if(Hash::check($req->password, $user['password'])){
                $req->session()->put(['name'=>$user->name, 'id'=>$user->id, 'role'=>$user->role]);
                return redirect(route('dashboard'));
            }
        }
        return view('login')->with(['err'=>'Email or Password is Invald']);
    }

    function getRegistration(){
        return view('registration');
    }

    function registration(Request $req){
        $req->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'password' => 'required|min:5',
        ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role = $req->role;
        $user->save();
        return redirect()->route('contact')->with(["name"=>$req->name, "email"=>$req->email,"phone"=>$req->phone, "password"=>$req->password]);
    }

    function getEdit(){
        $user = User::where('id', session()->get('id'))->first();
        return view('editUser')->with([
            'user'=>$user
        ]);
    }

    function edit(Request $req){
        $req->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
        ]);
        $user = User::where('id',session()->get('id'))->first();
        $user->name  = $req->name;
        $user->email = $req->email;
        $user->save();
    }

    public function userProfile(){
        $user = User::where('id', session()->get('id'))->first();
        return view('userProfile')->with([
            'user'=>$user
        ]);
    }

    public function dashboard(){
        $user = User::where('id', session()->get('id'))->first();
        return view('dashboard')->with([
            'user'=>$user
        ]);
    }

    public function adminGetUserList(){
        $users = User::where('role', 'user')->get();
        return view('userList')->with([
            'users'=>$users
        ]);
    }

    public function logout(Request $req){
        $req->session()->flush();
        return redirect()->route('login');
    }
}
