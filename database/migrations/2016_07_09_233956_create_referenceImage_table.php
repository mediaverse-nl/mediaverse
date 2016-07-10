<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenceimage', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('reference_id')->unsigned();
            $table->foreign('reference_id')->references('id')->on('reference');
            $table->string('image')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('referenceimage');
    }
}
