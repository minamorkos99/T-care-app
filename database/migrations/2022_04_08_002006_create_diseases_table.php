<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string('Diabetes_mellitus'); 
            $table->string('Heart_failure'); 
            $table->string('Acute_coronary_syndrome');
            $table->string('Myocardial_infarction');
            $table->string('rheumatic_heart_disease');
            $table->string('Hypertension');
            $table->string('Portal_Hypertension');
            $table->string('Description1');
            $table->string('Chronic_kidney_disease');
            $table->string('Nephritic_and_nephrotic_syndrome');
            $table->string('Description2');
            $table->string('Renal_cell_carcinoma');
            $table->string('Chronic_leukemia');
            $table->string('Description3');
            $table->string('immune_suppression');
            $table->string('immune_thrombocytopenic');
            $table->string('Description4');
            $table->string('AIDS');
            $table->string('Description5');
            $table->string('Osteoporosis');
            $table->string('Description6');
            $table->string('COVID_19');
            $table->string('Description7');
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
        Schema::dropIfExists('diseases');
    }
}
