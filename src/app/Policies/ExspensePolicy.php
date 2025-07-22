<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Expense;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExpensePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any expenses.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_expense'); // Check if user has permission to view any expenses
    }

    /**
     * Determine whether the user can view the expense.
     */
    public function view(User $user, Expense $expense): bool
    {
        return $user->can('view_expense'); // Check if user can view a specific expense
    }

    /**
     * Determine whether the user can create expenses.
     */
    public function create(User $user): bool
    {
        return $user->can('create_expense'); // Check if user can create expenses
    }

    /**
     * Determine whether the user can update the expense.
     */
    public function update(User $user, Expense $expense): bool
    {
        return $user->can('update_expense'); // Check if user can update the specific expense
    }

    /**
     * Determine whether the user can delete the expense.
     */
    public function delete(User $user, Expense $expense): bool
    {
        return $user->can('delete_expense'); // Check if user can delete the specific expense
    }

    /**
     * Determine whether the user can bulk delete expenses.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_expense'); // Check if user can delete any expenses in bulk
    }

    /**
     * Determine whether the user can permanently delete the expense.
     */
    public function forceDelete(User $user, Expense $expense): bool
    {
        return $user->can('force_delete_expense'); // Check if user can permanently delete an expense
    }

    /**
     * Determine whether the user can permanently bulk delete expenses.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_expense'); // Check if user can permanently delete expenses in bulk
    }

    /**
     * Determine whether the user can restore the expense.
     */
    public function restore(User $user, Expense $expense): bool
    {
        return $user->can('restore_expense'); // Check if user can restore a deleted expense
    }

    /**
     * Determine whether the user can bulk restore expenses.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_expense'); // Check if user can restore expenses in bulk
    }

    /**
     * Determine whether the user can replicate the expense.
     */
    public function replicate(User $user, Expense $expense): bool
    {
        return $user->can('replicate_expense'); // Check if user can replicate an expense
    }

    /**
     * Determine whether the user can reorder expenses.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_expense'); // Check if user can reorder expenses
    }
}
