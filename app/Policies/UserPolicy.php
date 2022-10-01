<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function roleAdmin (User $user){
        $role = $user->role->name;
        if($role == 'admin'){
            return true;
        }
    }
    public function roleOperatorAdmin (User $user){
        $role = $user->role->name;
        if($role == 'admin' || $role == 'operator'){
            return true;
        }
    }
}
