<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function visitedLections()
    {
        return $this->hasMany(LectionVisit::class, 'user_id', 'id');
    }

    public function visitedPractics()
    {
        return $this->hasMany(PracticVisit::class, 'user_id', 'id');
    }

    public function visitedTests()
    {
        return $this->hasMany(TestVisit::class, 'user_id', 'id');
    }

    public function testTries()
    {
        return $this->hasMany(TestTry::class, "user_id", "id");
    }
}
