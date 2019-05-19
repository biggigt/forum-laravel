<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Thread;

class ThreadPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Thread $thread)
    {
        return $thread->user_id === $user->id;
    }
    public function __construct()
    {
        //
    }
}
