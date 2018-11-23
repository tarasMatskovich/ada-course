<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TryHistory extends Model
{
    protected $table = "users_tests_history";

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'user_answer_id', 'id');
    }
}
