<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDirections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias', 255);
            $table->string('name', 255);
            $table->string('depTime', 45);
            $table->string('arrTime', 45);
            $table->string('depAdd', 255);
            $table->string('arrAdd', 255);
            $table->integer('price');
            $table->tinyInteger('phoneForm');
            $table->longText('description');
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
        //
    }
}
