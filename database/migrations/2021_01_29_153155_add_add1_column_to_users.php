<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdd1ColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('add-1')->nullable();
            $table->string('add-2')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('provider_id')->nullable();
            $table->text('avatar')->nullable();
            $table->string('img')->nullable();
            $table->string('type')->default('USER');
            $table->string('country_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('authy_id')->nullable();
            $table->boolean('is_phone_verified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
