<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeyDirectorio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directorio', function(Blueprint $table){
            $table->unsignedBigInteger('id_tipo_contacto')->after('id');

            $table->foreign('id_tipo_contacto')->references('id')->on('tipo_contacto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('directorio', function(Blueprint $table){
            $table->dropColumn('id_tipo_contacto');
            $table->dropForeign('directorio_id_tipo_contacto_foreign');
        });
    }
}
