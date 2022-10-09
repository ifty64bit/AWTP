<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static $datas =[
        '0'=>['email'=>'ifty64bit@gmail.com', 'password'=>'123456'],
        '1'=>['email'=>'ifty@example.com', 'password'=>'1122334455']
    ];
    function getLogin(){
        return view('login');
    }

    function login(Request $req){
        $req->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:5',

        ]);
        foreach(UserController::$datas as $user){
            if($user['email']==$req->email && $user['password']==$req->password){
                return "success";
            }
        }
        return view('login')->with(['err'=>'Email or Password is Invald']);
    }

    function getRegistration(){
        return view('registration');
    }

    function registration(Request $req){
        $validated = $req->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|min:5',

        ]);
        return redirect()->route('contact')->with(["name"=>$req->name, "email"=>$req->email,"phone"=>$req->phone, "password"=>$req->password]);
    }
}
