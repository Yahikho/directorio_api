<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use Illuminate\Support\Facades\DB;

class ApiDirectorioController extends Controller
{
    public function index(){

        //$diretotios = Directorio::all();
        $diretotios = DB::table('directorio')
            ->select('directorio.nombre','tipo_contacto.descripcion','directorio.telefono','directorio.email','directorio.direccion')
            ->join('tipo_contacto','directorio.id_tipo_contacto','=','tipo_contacto.id')
            ->get();
        
        return response()->json([
            'directorios' => $diretotios
        ]);
    }

    public function create(){

        return view('directorio.create');

    }

    public function store(Request $request){

        $directorio = $request->all();
        Directorio::create($directorio);

        return response()->json([
            'respuesta' => true,
            'mensaje' => "Directorio creado",
            'directorio' => $directorio
        ]);

    }

    public function update(){}
}
