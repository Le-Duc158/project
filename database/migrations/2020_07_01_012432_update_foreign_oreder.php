<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignOreder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //update khoas ngoaij bangr order
        Schema::table('orders', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['user_id']);
        $table->dropForeign(['payment_method']);
        $table->dropForeign(['shipping_method']);
        // Foreign table users
        $table->foreign('user_id')
            ->references('id')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table payment_method
             $table->foreign('payment_method')
            ->references('id')
            ->on('payment_method')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table shipping_method
             $table->foreign('shipping_method')
            ->references('id')
            ->on('shipping_method')
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
