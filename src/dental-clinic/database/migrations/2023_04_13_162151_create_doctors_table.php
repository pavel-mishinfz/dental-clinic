<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('lastname');
            $table->unsignedBigInteger('department_id');
            $table->string('image');
            $table->string('small-image');
            $table->text('orientation');
            $table->integer('experience');
            $table->text('certificates');
            $table->timestamps();

            $table->index('department_id', 'doctor_department_idx');
            $table->foreign('department_id', 'doctor_department_fk')->on('departments')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
