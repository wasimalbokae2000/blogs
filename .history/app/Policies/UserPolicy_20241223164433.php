<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{

    public function is_admin(User $user): bool
    {
        dd($user->is_admin);
        return $user->is_admin;
    }


}
