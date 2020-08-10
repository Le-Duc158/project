<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignProductImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //update khoas ngoaij bangr order
        Schema::table('Product_image', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['product_id']);


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
