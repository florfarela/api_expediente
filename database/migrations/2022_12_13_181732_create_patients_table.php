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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('dui');
            $table->string('name');
            $table->integer('age');
            $table->string('adress')->nullable();
            $table->integer('phone')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('admitted')->nullable();
            $table->foreignId('idArea')
                  ->constrained('areas')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();            
            $table->string('observations')->nullable();
            $table->string('severity')->nullable();
            $table->foreignId('idDoctor')
                  ->constrained('doctors')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete(); 
            $table->foreignId('idRoles')
                  ->constrained('roles')
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
