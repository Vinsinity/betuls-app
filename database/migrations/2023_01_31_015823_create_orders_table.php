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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('order_status_id')->unsigned();
            $table->bigInteger('cargo_id')->unsigned();
            $table->bigInteger('user_address_id')->unsigned();
            $table->bigInteger('shipping_address_id')->unsigned();
            $table->json('cart_content');

            $table->string('order_number');
            $table->decimal('total_price',14);
            $table->decimal('cargo_price',14);
            $table->integer('total_quantity');
            $table->string('tracking_number');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_status_id')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_address_id')->references('id')->on('user_address')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('shipping_address_id')->references('id')->on('user_address')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
};
