<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyTable extends Migration
{
    public function up()
    {
        Schema::create('pharmacy', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('area_id');
            $table->integer('city_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pharmacy');
    }
}
