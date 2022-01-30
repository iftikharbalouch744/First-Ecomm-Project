<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
         $user=User::where(['email'=>$req->email])->first();

         if(!$user || !Hash::check($req->password, $user->Password)){
             return "Email or Password Incorrect";
         }
         else{
             $req->session()->put('user', $user);
             return redirect('/');
         }
    }
    public function signup(Request $req){
        $user=new User;
        $user->Name=$req->username;
        $user->Email=$req->email;
        $user->Password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
