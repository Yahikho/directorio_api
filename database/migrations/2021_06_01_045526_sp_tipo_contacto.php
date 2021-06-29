<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpTipoContacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "
        CREATE PROCEDURE `sp_tipoContacto`(
                in _id int,
                in _descripcion varchar(225),
                in accion varchar(40)
            )
            BEGIN
                case accion
                when 'insert' then
                    insert into directorios.tipo_contacto (descripcion)
                    values (_descripcion);
                when 'edit' then
                    update directorios.tipo_contacto  set 
                    descripcion = _descripcion
                    where id = _id;
                when 'delete' then
                    delete from directorios.tipo_contacto
                    where id = _id;
                when 'select' then
                    select descripcion from directorios.tipo_contacto;
                when 'id' then
                 	select * from directorios.directorio
                 	where id_tipo_contacto = _id;
                end case;       
        END
        ";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  
        $procedure = "DROP PROCEDURE IF EXISTS sp_tipoContacto";
        DB::unprepared($procedure);
    }
}
