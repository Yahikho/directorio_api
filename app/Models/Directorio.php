<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    protected $table = 'directorio';
    use HasFactory;

    protected $fillable =[
        'id_tipo_contacto',
        'nombre',
        'telefono',
        'email',
        'direccion'
    ];

    protected $hidden = [
      'created_at',
      'updated_at'  
    ];
}
