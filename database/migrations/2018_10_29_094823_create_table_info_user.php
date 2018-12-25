<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInfoUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('info_users', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->string('telefono',50)->unique();
            $table->unsignedInteger('direcciones_id');
            $table->string('genero');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('direcciones_id')->references('id')->on('direcciones');
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
        Schema::dropIfExists('info_users');
    }
}
