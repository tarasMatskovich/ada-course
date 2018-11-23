<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = [];

    public const MAX_ESTIMATION = 5;

    protected $table = 'tests';

    public function questions()
    {
        return $this->hasMany(Question::class, 'test_id', 'id');
    }
}
