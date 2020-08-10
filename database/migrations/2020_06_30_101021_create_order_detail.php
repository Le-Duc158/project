<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return vpopmail_del_domain(domain)
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')-> references('id')-> on ('orders');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')-> references('id')-> on ('product');
            $table->float('quantity');
            $table->float('price');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->primary(['order_id','product_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
