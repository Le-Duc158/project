<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::dropIfExists('comment');
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')-> references('id')-> on ('user');
            $table->bigInteger('blog_id')->unsigned();
            $table->foreign('blog_id')-> references('id')-> on ('blogs');
            $table->string('content');
            $table->unsignedbiginteger('parent_id')->nullable();
            $table->foreign('parent_id')-> references('id')-> on ('comment');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('comment');
    }
}
