<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidicallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midicalls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->references('id')->on('covid_19s');
            $table->foreignId('doctor_id')->references('id')->on('doctors');
            $table->foreignId('hospital_id')->references('id')->on('hospitals');
            $table->foreignId('diseases_id')->references('id')->on('diseases');
            $table->foreignId('user_id')->references('id')->on('users');
        $table->string('bloodtype');
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
        Schema::dropIfExists('midicalls');
    }
}
