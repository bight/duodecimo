<?php

namespace App\Policies;

use App\Models\BackMatter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BackMatterPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, BackMatter $backMatter): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, BackMatter $backMatter): bool
    {
        //
    }

    public function delete(User $user, BackMatter $backMatter): bool
    {
        //
    }

    public function restore(User $user, BackMatter $backMatter): bool
    {
        //
    }

    public function forceDelete(User $user, BackMatter $backMatter): bool
    {
        //
    }
}
