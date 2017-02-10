<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('ciudad', function (Blueprint $table) {
            $table->increments('id');
            $table
                ->integer('estado_id')   //creamos un entero
                ->unsigned();               //sin signo
             $table
                ->foreign('estado_id')   //creamos la clave foránea
                ->references('id')          //asociada al campo id
                ->on('estados')          //De la tabla categorias
                ->onDelete('cascade');      //y que tenga borrado en cascada
            $table->string('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
          Schema::drop('ciudad');
    }
}
