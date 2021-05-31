<?php

namespace App\Http\Controllers;

use App\Models\TipoPersona;
use Illuminate\Http\Request;

class TipoPersonaController extends Controller
{
    public function index(){

        return TipoPersona::all();
        
    }

    public function store(Request $request){

        $tipoPersona = $request->all();
        TipoPersona::create($tipoPersona);

        return response()->json([
            'respouse' => true,
            'message' => "Directorio creado"
        ]);

    }
}
