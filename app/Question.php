<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'reference_id',
        'code_question',
        'content_question',
        'option_question_a',
        'option_question_b',
        'option_question_c',
        'option_question_d',
        'option_question_e',
        'question_correct',
        'question_difficulty',
        'question_subjects',
        'question_img'
    ];

    protected $table = 'questions';
}
