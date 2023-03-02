<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;

class BlogPolicy
{
    const UPDATE = 'update';
    const DELETE = 'delete';
    const SUBSCRIBE = 'subscribe';
    const UNSUBSCRIBE = 'unsubscribe';

    public function update(User $user, Blog $blog): bool
    {
        return $blog->isAuthoredBy($user) || $user->isModerator() || $user->isAdmin();
    }

    public function delete(User $user, Blog $blog): bool
    {
        return $blog->isAuthoredBy($user) || $user->isModerator() || $user->isAdmin();
    }

}
