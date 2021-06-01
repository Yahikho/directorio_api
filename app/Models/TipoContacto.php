<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContacto extends Model
{
    protected $table = 'tipo_contacto';
    use HasFactory;

    protected $fillable =[
        'descripcion'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'  
    ];
}
