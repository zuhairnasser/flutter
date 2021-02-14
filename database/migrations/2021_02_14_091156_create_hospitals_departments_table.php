<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals_departments', function (Blueprint $table) {
            $table->id();

            $table->timestamps();
            $table->bigInteger('department_id');
            $table->foreign('department_id')
                ->references('id')
                ->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('hospitals_departments');
    }
}
