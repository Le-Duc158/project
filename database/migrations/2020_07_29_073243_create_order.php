<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->bigInteger('payment_method')-> unsigned();
            $table->foreign('payment_method')->references('id')->on('payment_method');
            $table->bigInteger('shipping_method')-> unsigned();
            $table->foreign('shipping_method')->references('id')->on('shipping_method');
            $table->float('total_amount');
            $table->string('note');
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
        Schema::dropIfExists('order');
    }
}
