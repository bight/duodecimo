<?php

namespace App\Policies;

use App\Models\Chapter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChapterPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Chapter $chapter): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Chapter $chapter): bool
    {
        //
    }

    public function delete(User $user, Chapter $chapter): bool
    {
        //
    }

    public function restore(User $user, Chapter $chapter): bool
    {
        //
    }

    public function forceDelete(User $user, Chapter $chapter): bool
    {
        //
    }
}
