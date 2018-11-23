<?php

namespace App\Policies;

use App\Role;
use App\User;
use DB;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function admin(User $user)
    {
        foreach ($user->roles as $role) {
            if ($role->name == 'Administrator') {
                return true;
            }
        }

        return false;
    }
}
