<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Test;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tests.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_test'); // Check if user has permission to view any test
    }

    /**
     * Determine whether the user can view the test.
     */
    public function view(User $user, Test $test): bool
    {
        return $user->can('view_test'); // Check if user can view the specific test
    }

    /**
     * Determine whether the user can create tests.
     */
    public function create(User $user): bool
    {
        return $user->can('create_test'); // Check if user can create tests
    }

    /**
     * Determine whether the user can update the test.
     */
    public function update(User $user, Test $test): bool
    {
        return $user->can('update_test'); // Check if user can update the specific test
    }

    /**
     * Determine whether the user can delete the test.
     */
    public function delete(User $user, Test $test): bool
    {
        return $user->can('delete_test'); // Check if user can delete the specific test
    }

    /**
     * Determine whether the user can bulk delete tests.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_test'); // Check if user can bulk delete tests
    }

    /**
     * Determine whether the user can permanently delete the test.
     */
    public function forceDelete(User $user, Test $test): bool
    {
        return $user->can('force_delete_test'); // Check if user can permanently delete the specific test
    }

    /**
     * Determine whether the user can permanently bulk delete tests.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_test'); // Check if user can permanently delete tests in bulk
    }

    /**
     * Determine whether the user can restore the test.
     */
    public function restore(User $user, Test $test): bool
    {
        return $user->can('restore_test'); // Check if user can restore a deleted test
    }

    /**
     * Determine whether the user can bulk restore tests.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_test'); // Check if user can restore tests in bulk
    }

    /**
     * Determine whether the user can replicate the test.
     */
    public function replicate(User $user, Test $test): bool
    {
        return $user->can('replicate_test'); // Check if user can replicate a test
    }

    /**
     * Determine whether the user can reorder tests.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_test'); // Check if user can reorder tests
    }
}
