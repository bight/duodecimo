<?php

namespace App\Policies;

use App\Models\Content;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Content $content): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Content $content): bool
    {
        //
    }

    public function delete(User $user, Content $content): bool
    {
        //
    }

    public function restore(User $user, Content $content): bool
    {
        //
    }

    public function forceDelete(User $user, Content $content): bool
    {
        //
    }
}
