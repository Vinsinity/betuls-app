<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->string('name');
            $table->string('surname');
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('county_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->bigInteger('neighborhood_id')->unsigned();
            $table->text('address');
            $table->string('phone_number');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('county_id')->references('id')->on('counties');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods');
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
        Schema::dropIfExists('user_addresses');
    }
};
