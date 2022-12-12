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
    {   //Pasamos toda la estuctura de la tabla y campos de la tabla "patient"
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('dui');
            $table->string('name');
            $table->integer('age');
            $table->string('adress');
            $table->integer('phone');
            $table->string('diagnosis');
            $table->string('admitted');
            $table->string('area');
            $table->string('observations');
            $table->string('severity');
            $table->string('doctor');
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
        Schema::dropIfExists('patient');
    }
};
