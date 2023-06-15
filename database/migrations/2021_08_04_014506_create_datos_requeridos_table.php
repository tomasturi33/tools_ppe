<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosRequeridosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_requeridos', function (Blueprint $table) {
            $table->id();
            $table->boolean('username');
            $table->boolean('lastname');
            $table->boolean('dni');
            $table->boolean('email');
            $table->boolean('phone');
            $table->boolean('institution');
            $table->boolean('career');
            $table->boolean('student');
            $table->unsignedInteger('encuesta_id');
            $table->foreign('encuesta_id')->references('id')->on('encuestas')->onDelete('cascade');
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
        Schema::dropIfExists('datos_requeridos');
    }
}
