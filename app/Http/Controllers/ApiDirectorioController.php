<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearDirectorioRequest;
use App\Http\Requests\EditarDirectorioRequest;
use App\Http\Requests\UpdateTipoRequest;
use Illuminate\Http\Request;
use App\Models\Directorio;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;

class ApiDirectorioController extends Controller
{
    public function index(){
        
        $diretotios = DB::table('directorio')
            ->select('directorio.id','directorio.nombre','tipo_contacto.descripcion','directorio.telefono','directorio.email','directorio.direccion')
            ->join('tipo_contacto','directorio.id_tipo_contacto','=','tipo_contacto.id')
            ->get();
        
        return response()->json([
            'directorios' => $diretotios
        ],200);
    }

    public function create(){

        return view('directorio.create');

    }

    public function show(Directorio $directorio){
        return $directorio;
    }

    public function store(CrearDirectorioRequest $request){

        $directorio = $request->all();
        Directorio::create($directorio);
        return response()->json([
            'respounse' => true,
            'message' => "Directorio creado",
            'directorio' => $directorio
        ],200);

    }

    public function destroy($directorio){

        Directorio::destroy($directorio);

        return response()->json([
            'respounse' => true,
            'message' => "Directorio eliminado"
        ],200);

    }
    
    public function update(EditarDirectorioRequest $request, Directorio $directorio){
        
        $input = $request->all();
        $directorio->update($input);

        return response()->json([
            'response' => true,
            'message' => "Directorio Actualizado"
        ],200);

    }
}
