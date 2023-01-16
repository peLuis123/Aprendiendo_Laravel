<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
// la ruta principal se detemina el index
    public function index(){
        return view('\cursos\index' );
    }
    // la ruta para crear cursos se denomina create
    public function create(){
        return view('\cursos\create');
    }
    //la ruta para ver cursos se denomina show
    public function show($curso){
        //si la variable que recibes coincide con la que tu estas creando entonces se puede hacer con el metodo compact que es lo mismo
        return view('\cursos\show',compact('curso'));
        //return view('\cursos\show',['curso' => $curso]);
    }
}
