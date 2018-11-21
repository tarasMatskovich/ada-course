<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lection extends Model
{
    protected $fillable = [
        'title',
        'text',
    ];
}
