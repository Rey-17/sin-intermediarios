<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDirecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('direcciones',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 200);
            $table->unsignedInteger('provincias_id');
            $table->unsignedInteger('distritos_id');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->boolean('coordenada_visible')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('provincias_id')->references('id')->on('provincias');
            $table->foreign('distritos_id')->references('id')->on('distritos');
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
        Schema::dropIfExists('direcciones');
    }
}
