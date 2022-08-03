<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studant_id');
            $table->integer('character_id');
            $table->integer('power')->default(230);
            $table->integer('attack')->default(10);
            $table->integer('vitality')->default(100);
            $table->integer('critical')->default(10);
            $table->integer('luck')->default(10);
            $table->integer('armor')->default(100);
            $table->integer('points')->default(0);
            $table->integer('energy')->default(0);
            $table->integer('fight')->default(0);
            $table->timestamps();

            $table->foreign('studant_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
