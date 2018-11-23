<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practic extends Model
{
    protected $fillable = [
        'title',
        'text',
    ];

    public function lection()
    {
        return $this->belongsTo(Lection::class,'id', 'lection_id');
    }
}
