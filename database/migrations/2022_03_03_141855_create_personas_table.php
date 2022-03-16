<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('escalafon_id');
            $table->foreign('escalafon_id')->references('id')->on('escalafons');

            $table->unsignedBigInteger('grado_id');
            $table->foreign('grado_id')->references('id')->on('grados');

            $table->unsignedBigInteger('arma_id');
            $table->foreign('arma_id')->references('id')->on('armas');

            $table->unsignedBigInteger('especialidad_id');
            $table->foreign('especialidad_id')->references('id')->on('especialidads');

            $table->string('paterno', 20)->nullable();
            $table->string('materno', 20)->nullable();
            $table->string('nombre', 40);
            $table->integer('ci');

            $table->unsignedBigInteger('extension_id');
            $table->foreign('extension_id')->references('id')->on('extensions');

            $table->year('egreso');
            $table->integer('antiguedad');

            $table->unsignedBigInteger('sexo_id');
            $table->foreign('sexo_id')->references('id')->on('sexos');

            $table->unsignedBigInteger('estadocivil_id');
            $table->foreign('estadocivil_id')->references('id')->on('estado_civils');
            
            $table->date('fecha_nacimiento');
            $table->string('domicilio', 60);
            $table->integer('celular');
            $table->integer('celular2');
            $table->string('email', 50);
            $table->string('foto', 60);
            $table->string('nombre_completo', 50);
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
        Schema::dropIfExists('personas');
    }
}
