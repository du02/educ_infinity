<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('reference_id');
            $table->text('content_question');
            $table->text('option_question_a');
            $table->text('option_question_b');
            $table->text('option_question_c');
            $table->text('option_question_d');
            $table->text('option_question_e');
            $table->enum('question_correct', ['A', 'B', 'C', 'D', 'E']);
            $table->enum('question_difficulty', ['EASY', 'MEDIUM', 'HARD']);
            $table->enum('question_subjects', ['POR', 'MAT', 'CIE', 'HIS', 'GEO', 'ING']);
            $table->string('question_img');
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
        Schema::dropIfExists('questions');
    }
}
