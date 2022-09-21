<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientClinicalExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_clinical_examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->string('visit_id');
            $table->longtext('general_appearance');
            $table->longtext('skin_observation');
            $table->string('pulse');
            $table->string('respiratory_rate');
            $table->string('temperature');
            $table->string('blood_pressure');
            $table->longtext('cardio_vascular_system');
            $table->longtext('respiratory_system');
            $table->longtext('neurological_system');
            $table->longtext('digestive_system');
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
        Schema::dropIfExists('patient_clinical_examinations');
    }
}
