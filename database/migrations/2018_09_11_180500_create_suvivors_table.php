<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuvivorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suvivors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('lat');
            $table->string('lng');
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
        Schema::drop('suvivors');
    }
}
