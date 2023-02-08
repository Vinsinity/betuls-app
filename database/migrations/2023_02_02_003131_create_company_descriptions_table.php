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
        Schema::create('company_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('authorized_person')->nullable();
            $table->string('company_shortname')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('gsm')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('company_address')->nullable();
            $table->string('branch_addresses')->nullable();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('county_id')->unsigned();
            $table->string('zip_code')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('tax_county')->nullable();

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('county_id')->references('id')->on('counties');
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
        Schema::dropIfExists('company_descriptions');
    }
};
