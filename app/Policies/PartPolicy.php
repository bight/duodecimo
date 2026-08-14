<?php

namespace App\Policies;

use App\Models\Part;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Part $part): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Part $part): bool
    {
        //
    }

    public function delete(User $user, Part $part): bool
    {
        //
    }

    public function restore(User $user, Part $part): bool
    {
        //
    }

    public function forceDelete(User $user, Part $part): bool
    {
        //
    }
}
