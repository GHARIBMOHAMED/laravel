<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('saleDate')->nullable();
            $table->string('saleName')->nullable();
            $table->json('images')->nullable();
            $table->string('km')->nullable();
            $table->string('price')->nullable();
            $table->string('estValue')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->string('transmittion')->nullable();
            $table->string('cylender')->nullable();
            $table->string('direction')->nullable();
            $table->string('damage')->nullable();
            $table->string('plate')->nullable();
            $table->string('year')->nullable();
            $table->string('fuleType')->nullable();
            $table->string('vehicleType')->nullable();
            $table->string('engineType')->nullable();
            $table->string('featured')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
