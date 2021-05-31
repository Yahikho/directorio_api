<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    protected $table = 'tipo_persona';
    use HasFactory;

    protected $fillable =[
        'descripcion'
    ];
}