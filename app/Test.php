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

    public function try()
    {
        return $this->hasOne(TestTry::class, 'test_id', 'id');
    }

    public function lection()
    {
        return $this->belongsTo(Lection::class,'id', 'lection_id');
    }
}
