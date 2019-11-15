<?php

namespace App\Http\Controllers;
use App\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    
    public function index()
    {
        $departamento = Departamento::all();
        return view('departamento/index')->with('departamentos',$departamento);
    }
}

