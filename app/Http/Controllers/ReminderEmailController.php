<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
class ReminderEmailController extends Controller
{
    public function SendReminderEmail(){
        DB::table('users')->get();

        $data= ['name'=>"M.Iftikhar", 'data'=>"Hello Affi g.."];
        $user['to']="miftikhar@gcuf.edu.pk";
        Mail::send('emailtemplate',$data, function($messages) use($user){
            $messages->to($user['to']);
            $messages->subject('You Reminader Email');
        });
        return "Email successfully sent..";
        //return view('emailtemplate');
    }
}
