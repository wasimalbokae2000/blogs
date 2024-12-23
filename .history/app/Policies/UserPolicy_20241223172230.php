<?php

namespace App\Policies;

use App\Models\User;


class UserPolicy
{

    public function __construct()
    {
        dd("eror");
    }
    public function p_Is_admin(User $user): bool
    {
        if($user->is_admin)
        return $user->is_admin;
        else
        abort(403, 'عذراً، ليس لديك صلاحية للوصول إلى هذه الصفحة.');
    }


}
