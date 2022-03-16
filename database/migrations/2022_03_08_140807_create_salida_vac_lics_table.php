<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaVacLicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_vac_lics', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('personas_id');
            $table->foreign('personas_id')->references('id')->on('personas')
                ->onDelete('cascade')  // elimina registro
                ->onUpdate('cascade'); // modifica registro

            $table->date('f_solicitud');
            $table->integer('tiempo_trabajo');
            
            $table->unsignedBigInteger('vacacions_id');
            $table->foreign('vacacions_id')->references('id')->on('vacacions');

            $table->integer('t_dispuesto');
            $table->integer('t_restante');
            $table->integer('colectiva');
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
        Schema::dropIfExists('salida_vac_lics');
    }
}
