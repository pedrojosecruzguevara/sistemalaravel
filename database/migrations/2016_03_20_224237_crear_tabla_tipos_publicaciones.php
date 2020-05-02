<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTiposPublicaciones extends Migration
{
    public function up()
    {
        Schema::create('tipos_publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',40);
            $table->timestamps();
        });
    }

    public function down()
    {
         Schema::drop('tipos_publicaciones');
    }
}
