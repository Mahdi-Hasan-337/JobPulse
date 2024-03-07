<?php

namespace App\Observers;

use App\Models\User;

class UserObserver {

    public function creating(User $user) {
        if ($user->usertype === 'system' || $user->usertype === 'candidate') {
            $user->verify = 'verified';
        } elseif ($user->usertype === 'company') {
            $user->verify = 'not-verified';
        }
    }
}
