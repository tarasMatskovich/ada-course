<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTry extends Model
{
    protected  $table = "users_tests_tries";

    public function history()
    {
        return $this->hasMany(TryHistory::class,"user_test_try_id", "id");
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id', 'id');
    }
}
