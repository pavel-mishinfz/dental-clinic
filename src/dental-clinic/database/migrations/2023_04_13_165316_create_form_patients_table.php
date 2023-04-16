<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_patients', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('patient_id');
            $table->index('patient_id', 'form_patient_patient_idx');
            $table->foreign('patient_id', 'form_patient_patient_fk')->on('patients')->references('id');

            $table->unsignedBigInteger('doctor_id');
            $table->index('doctor_id', 'form_patient_doctor_idx');
            $table->foreign('doctor_id', 'form_patient_doctor_fk')->on('doctors')->references('id');

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
        Schema::dropIfExists('form_patients');
    }
}
