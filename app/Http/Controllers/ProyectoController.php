<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Proyecto;



class ProyectoController extends Controller
{
    public function index()
    {
        $proyecto = Proyecto::all();
        return view('proyectos/index')->with('proyectos',$proyecto);
    }
    
}
