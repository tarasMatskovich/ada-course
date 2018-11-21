<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'questions_answers';

    public function  question()
    {
        return $this->belongsTo(Question::class, 'id', 'question_id');
    }
}
