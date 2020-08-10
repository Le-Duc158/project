<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //update khoas ngoaij bangr order
        Schema::table('order_detail', function (Blueprint $table) {
        //Drop foreign key

        //$table->dropForeign(['product_id']);

         // Foreign table order
        $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        // Foreign table product
        $table->foreign('product_id')
            ->references('id')
            ->on('product')
            ->onUpdate('cascade')
            ->onDelete('cascade');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
