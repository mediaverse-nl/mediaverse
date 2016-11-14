<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('customer');
            $table->decimal('price', 5,2);
            $table->string('duur');
            $table->string('email');
            $table->string('telefoon');
            $table->string('status');
            $table->string('type');
            $table->string('uml');
            $table->string('usecase');
            $table->string('pva');
            $table->string('contract');
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
        Schema::drop('project');
    }
}
