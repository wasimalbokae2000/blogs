<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{

    public function p_Is_admin(User $user): bool
    {
        return $user->is_admin;
    }


}
