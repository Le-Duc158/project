<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignFavorite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //update khoas ngoaij bangr order
        Schema::table('favorite', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['product_id']);
        $table->dropForeign(['user_id']);

        // Foreign table product
        $table->foreign('product_id')
            ->references('id')
            ->on('product')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table user
             $table->foreign('user_id')
            ->references('id')
            ->on('user')
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
