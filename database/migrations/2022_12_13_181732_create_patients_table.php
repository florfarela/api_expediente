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
        Schema::create('patients', function (Blueprint $table) { //funcion que preparara los camos existentes donde se ingresaran los datos
            $table->id();
            $table->integer('dui');
            $table->string('name');
            $table->integer('age');
            $table->string('adress')->nullable(); 
            $table->integer('phone')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('admitted')->nullable();
            $table->foreignId('idArea') //Establecemos la llave foranea que nos ayudaran a recibir la vinculacion de las demas tablas
                  ->constrained('areas') //e indicamos de donde proviene la vinculacion
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();            
            $table->string('observations')->nullable();
            $table->string('severity')->nullable();
            $table->foreignId('idDoctor') //Establecemos la llave foranea que nos ayudaran a recibir la vinculacion de las demas tablas
                  ->constrained('doctors')//e indicamos de donde proviene la vinculacion
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete(); 
            $table->foreignId('idRoles') //Establecemos la llave foranea que nos ayudaran a recibir la vinculacion de las demas tablas
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
        Schema::dropIfExists('patients');
    }
};
