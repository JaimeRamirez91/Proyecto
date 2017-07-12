<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'],['name'=>'jaime'], function($massage){
            $massage->to('jaimea.ramirezv@yahoo.com','algo.com')
                ->subject('test email');
            $massage->from('jaimeramirez14611@gmail.com','gsjhdgfjsdg');
        });
    }
}
