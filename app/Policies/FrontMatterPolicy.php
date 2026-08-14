<?php

namespace App\Policies;

use App\Models\FrontMatter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FrontMatterPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, FrontMatter $frontMatter): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, FrontMatter $frontMatter): bool
    {
        //
    }

    public function delete(User $user, FrontMatter $frontMatter): bool
    {
        //
    }

    public function restore(User $user, FrontMatter $frontMatter): bool
    {
        //
    }

    public function forceDelete(User $user, FrontMatter $frontMatter): bool
    {
        //
    }
}
