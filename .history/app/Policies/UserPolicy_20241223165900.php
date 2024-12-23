<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{

    public function is_adminz(User $user): bool
    {
        return $user->is_admin;
    }


}
