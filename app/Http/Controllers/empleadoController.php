<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empleadoController extends Controller
{
    public function index(){
        $empleados::all();
        return view('empleados/index')->with('empleados',$empleados);
    }
}
