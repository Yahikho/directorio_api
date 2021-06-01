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

        return view('directorio.create');
    }
}
