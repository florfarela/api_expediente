<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('doctors', function (Blueprint $table) { //funcion que preparara los camos existentes donde se ingresaran los datos
            $table->id();
            $table->integer('dui');
            $table->string('name');
            $table->foreignId('idRoles') //creamos la llave foreaneas que nos ayudaran a recibir la vinculacion de las demas tablas
                  ->constrained('roles') //e indicamos de donde proviene la vinculacion
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->string('specialty')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
