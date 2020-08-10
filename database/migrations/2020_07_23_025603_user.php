<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class user extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       Schema::create('user', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email');
        $table->float('phone');
        $table->date('birthday');
        $table->string('address');
        $table->string('password');
        $table->timestamps();
    });
       Schema::table('user', function (Blueprint $table) {
           $table->string('email')->unique()->change();
       });

   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('user');

   }
}
