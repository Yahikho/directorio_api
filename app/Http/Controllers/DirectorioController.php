<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class DirectorioController extends Controller
{   

    
    public function index(){

        return view('directorio.index');
    }

    public function create(){

        $tipoContacto = DB::select('CALL sp_tipoContacto(?,?,?)', array(0,0,'select'));

        return view('directorio.create',compact('tipoContacto'));
    }

    public function show(Directorio $directorio){

        return view('directorio.show', compact('directorio'));

    }

    public function edit(Directorio $directorio){

        $tipoContacto = DB::select('CALL sp_tipoContacto(?,?,?)', array(0,0,'select'));   

        return view('directorio.edit', compact('directorio','tipoContacto'));

    }
}
