<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proyectoController extends Controller
{
    public function index(){
        $proyectos::all();
        return view('proyectos/index')->with('proyectos'$proyectos);
    }
}
