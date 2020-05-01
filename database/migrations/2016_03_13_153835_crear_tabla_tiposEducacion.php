<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTiposEducacion extends Migration
{
    public function up()
    {
        
          Schema::create('tiposeducacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',20);
            $table->timestamps();
          });
    }

    public function down()
    {
        //
    }
}
