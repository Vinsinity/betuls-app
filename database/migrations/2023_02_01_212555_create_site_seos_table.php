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
        Schema::create('site_seos', function (Blueprint $table) {
            $table->string('site_title');
            $table->string('site_description')->nullable();
            $table->string('site_keywords')->nullable();
            $table->string('site_robots')->nullable();
            $table->string('site_sitemap')->nullable();
            $table->string('site_rss')->nullable();
            $table->string('site_google_verify')->nullable();
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
        Schema::dropIfExists('site_seos');
    }
};
