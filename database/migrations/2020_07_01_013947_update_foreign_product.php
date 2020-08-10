<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //update khoas ngoaij bangr order
        Schema::table('product', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['category_id']);
        $table->dropForeign(['origin_id']);

        // Foreign table category
        $table->foreign('category_id')
            ->references('id')
            ->on('category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table origin_id
             $table->foreign('origin_id')
            ->references('id')
            ->on('origin')
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
