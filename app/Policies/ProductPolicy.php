<?php

namespace App\Policies;

use App\Models\User;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function index(): bool
    {
        return true;
    }
    public function create(): bool
    {
        return true;
    }
    public function view(User $user, $product): bool
    {
        return $product->is_public || $user->id === $product->user_id;
    }
    public function update(User $user, $product): bool
    {
        return $user->id === $product->user_id;
    }
    public function delete(User $user, $product): bool
    {
        return $user->id === $product->user_id;
    }
}
