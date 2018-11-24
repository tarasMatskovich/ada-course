<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lection extends Model
{
    protected $fillable = [
        'title',
        'text',
    ];

    public function practics()
    {
        return $this->hasMany(Practic::class, 'lection_id', 'id');
    }

    public function tests()
    {
        return $this->hasMany(Test::class, 'lection_id', 'id');
    }
}
