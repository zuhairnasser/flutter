<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals_doctors', function (Blueprint $table) {
            $table->id();

            $table->timestamps();
            $table->bigInteger('doctor_id');
            $table->foreign('doctor_id')
                ->references('id')
                ->on('doctors')->onDelete('cascade');
            $table->bigInteger('hospital_id');
            $table->foreign('hospital_id')
                ->references('id')
                ->on('hospitals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals_doctors');
    }
}
