<?php

namespace App\Http\Controllers;

use App\Models\TipoContacto;
use Illuminate\Http\Request; 

class TipoContactoController extends Controller
{
    public function index(){
        

        return view('tipos.index');

    }

    public function create(){

        return view('tipos.create');

    }

    public function show(TipoContacto $tipo){

        return view('tipos.show', compact('tipo'));

    }

    public function edit(TipoContacto $tipo){
        
        return view('tipos.edit', compact('tipo'));
    }

}
