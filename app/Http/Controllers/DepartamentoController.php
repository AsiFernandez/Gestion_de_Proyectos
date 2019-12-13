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

    public function show($id)
    {
        $departamento = Departamento::where('id',$id)->first();
        return view('departamento/info', ['departamento'=>$departamento]);
       
    }
}

