<?php

namespace App\Http\Controllers;
use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleados = Empleado::all();
        return view('empleados/index')->with('empleados',$empleados);
    }
}
