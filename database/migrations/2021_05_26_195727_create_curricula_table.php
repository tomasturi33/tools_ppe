<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('location');
            $table->string('dni');
            $table->string('cell_phone');
            $table->date('date_of_birth');
            $table->string('email');
            $table->text('training')->nullable();
            $table->text('work_experience')->nullable();
            $table->text('languages')->nullable();
            $table->text('courses_trainings')->nullable();
            $table->text('interests_or_additional_information')->nullable();
            $table->string('photo')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('curricula');
    }
}
