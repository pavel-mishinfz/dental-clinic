<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('doctor_id');

            $table->index('department_id', 'department_doctor_department_idx');
            $table->index('doctor_id', 'department_doctor_doctor_idx');

            $table->foreign('department_id', 'department_doctor_department_fk')->on('departments')->references('id');
            $table->foreign('doctor_id', 'department_doctor_doctor_fk')->on('doctors')->references('id');

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
        Schema::dropIfExists('department_doctors');
    }
}
