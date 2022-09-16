<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_19s', function (Blueprint $table) {
            $table->id();
            $table->string('faver');
            $table->string('tiredness');
            $table->string('Dry_Cough');
            $table->string('Difficulty_in_Breathing');
            $table->string('Sore_Throat');
            $table->string('Pains');
            $table->string('Nasal_Congestion');
            $table->string('Runny_Nose'); 
            $table->string('Diarrhea'); 
            $table->string('Age_0_9'); 
            $table->string('Age_10_19'); 
            $table->string('Age_20_24'); 
            $table->string('Age_25_59'); 
            $table->string('Age_60'); 
            $table->string('gender');
            $table->string('contact_dont_know');
            $table->string('contact_no');
            $table->string('contact_yes');
            $table->string('color');
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
        Schema::dropIfExists('covid_19s');
    }
}
