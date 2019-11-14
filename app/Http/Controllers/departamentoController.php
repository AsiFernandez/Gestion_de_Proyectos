<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class departamentoController extends Controller
{
    
    public function index(){
         $departamentos::all();
         return view('departamentos/index')->with('departamentos',$departamentos);
    }

}
