<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//import de la libreria para User
use App\User;
class UserController extends Controller
{
    public function show($user){
        //almacenar datos del usuario de la BD
      //  $usr = User::find($user);
        //en esa bariable se guarda todas las propiedades del
        //elemento user y se accede a cualquier objero
        //usando el nombre de la columna
        //dd($usr->password);
        //return view('user',compact('usr'));
    }
    public function mostrar(){
        return view('user');
    }
}
