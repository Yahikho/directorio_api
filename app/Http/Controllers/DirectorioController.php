<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    public function index(){


        $diretotios = Directorio::all();

        return view('directorio.index', ['diretotios'=>$diretotios]);

    }

    public function create(){

        return view('directorio.create');

    }

    public function store(Request $request){

        $directorio = $request->all();
        Directorio::create($directorio);

        return response()->json([
            'repouse' => true,
            'message' => "Directorio creado"
        ]);

    }
}
