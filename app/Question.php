<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    protected $table = 'tests_questions';

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'id', 'test_id');
    }
}
