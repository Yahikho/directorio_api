<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearTipoRequest;
use App\Http\Requests\UpdateTipoRequest;
use App\Models\TipoContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class ApiTipoContactoController extends Controller
{
    public function index(){

        $tipoContacto = DB::select('CALL sp_tipoContacto(?,?,?)', array(0,0,'select'));

         return response()->json([
            'directorios' => $tipoContacto
         ],200);
        
    }

    public function store(CrearTipoRequest $request){


        DB::select('CALL sp_tipoContacto(?,?,?)', array(0,$request->input('descripcion'),'insert'));


        return response()->json([
            'message' => "Tipo contacto creado",
            'respounse' => true
        ],200);

    }

    public function update(UpdateTipoRequest $request, TipoContacto $tipo){

        return $request;

        // DB::select('CALL sp_tipoContacto(?,?,?)', array($tipo->id,$request->input('descripcion'),'edit'));

        // return response()->json([
        //     'message' => "Tipo contacto actualizado",
        //     'respounse' => true
        // ],200);

    }

    public function destroy(TipoContacto $tipo){

        
        $usoFK =  DB::select('CALL sp_tipoContacto(?,?,?)', array($tipo->id,0,'id'));

        if(empty($usoFK)){
            DB::select('CALL sp_tipoContacto(?,?,?)', array($tipo->id,0,'delete'));
            return response()->json([
                'message' => "Tipo contacto eliminado",
                'respounse' => true
            ]);
        }else{
            return response()->json([
                'message' => "Tipo contacto no se puede eliminar (Hay relacion entre tablas)",
                'respounse' => false
            ],200);
        }

    }
}
