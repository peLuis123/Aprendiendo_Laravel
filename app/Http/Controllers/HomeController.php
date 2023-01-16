<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //el metodo invoke es cuando la ruta solamente bah llamar a un controlador osea es una sola ruta en especifica 
    public function __invoke(){
        return view('home');
    }
   
}
