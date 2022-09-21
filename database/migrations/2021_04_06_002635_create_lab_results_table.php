<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_results', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('patient_id')->unsigned();
            $table->string('WBC')->default('no result');
            $table->string('LYMp')->default('no result');
            $table->string('MIDp')->default('no result');
            $table->string('GRANp')->default('no result');
            $table->string('LYMn')->default('no result');
            $table->string('MIDn')->default('no result');
            $table->string('GRANn')->default('no result');
            $table->string('RBC')->default('no result');
            $table->string('HGB')->default('no result');
            $table->string('HCT')->default('no result');
            $table->string('MCV')->default('no result');
            $table->string('MCH')->default('no result');
            $table->string('MCHC')->default('no result');
            $table->string('RDW_CV')->default('no result');
            $table->string('RDW_SD')->default('no result');
            $table->string('PLT')->default('no result');
            $table->string('MPV')->default('no result');
            $table->string('PDW')->default('no result');
            $table->string('PCT')->default('no result');
            $table->string('P_LCR')->default('no result');
            $table->string('P_LCC')->default('no result');
            $table->string('GLUCOSE')->default('no result');
            $table->string('CREAT')->default('no result');
            $table->string('Urea')->default('no result');
            $table->string('CRP_2')->default('no result');
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
        Schema::dropIfExists('lab_results');
    }
}
