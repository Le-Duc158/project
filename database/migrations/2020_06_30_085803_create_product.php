<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')-> references('id')-> on ('category');
            $table->string('name');
            $table->string('image');
            $table->float('price');
            $table->float('sale_price');
            $table->string('description',300);
            $table->string('meta_key');
            $table->string('meta_desc');
            $table->tinyInteger('status');
            $table->string('is_new');
            $table->string('is_hot');
            $table->string('tag_list');
            $table->bigInteger('origin_id')->unsigned();
            $table->foreign('origin_id')-> references('id')-> on ('origin');
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
        Schema::dropIfExists('product');
    }
}
