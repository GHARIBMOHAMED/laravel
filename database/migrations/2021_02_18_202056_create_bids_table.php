<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->integer('active_bid')->nullable();
            $table->integer('current_bid')->nullable();
            $table->string('bid_time')->nullable();
            $table->string('bid_date')->nullable();
            $table->string('item_won')->nullable();
            $table->string('expires_at')->nullable();
            $table->string('watching')->nullable();
            $table->string('favorite')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('car_id')->constrained('cars');
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
        Schema::dropIfExists('bids');
    }
}
