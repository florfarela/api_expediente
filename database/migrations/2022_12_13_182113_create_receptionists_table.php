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
        Schema::create('receptionists', function (Blueprint $table) { //funcion que preparara los camos existentes donde se ingresaran los datos
            $table->id();
            $table->integer('dui');
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('adress')->nullable();
            $table->foreignId('idArea') //establecemos la llave foranea que nos ayudara a recibir la vinculacion de las demas tablas
                  ->constrained('areas') //e indicamos de donde proviene la vinculacion
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();  
            $table->foreignId('idRoles') //establecemos la llave foranea que nos ayudara a recibir la vinculacion de las demas tablas
                  ->constrained('roles') //e indicamos de donde proviene la vinculacion
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete(); 
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
        Schema::dropIfExists('receptionists');
    }
};
