<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //update khoas ngoaij bangr order
        Schema::table('comment', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['user_id']);
        $table->dropForeign(['blog_id']);
        $table->dropForeign(['parent_id']);


         // Foreign table user
        $table->foreign('user_id')
            ->references('id')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        // Foreign table blogs
        $table->foreign('blog_id')
            ->references('id')
            ->on('blogs')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table parents
        $table->foreign('parent_id')
            ->references('id')
            ->on('comment')
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
