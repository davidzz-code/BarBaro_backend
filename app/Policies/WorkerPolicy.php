<?php

namespace App\Policies;

use App\Models\Worker;
use App\Models\User;

class WorkerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        // return $user;
        return true;
    }

    /**
     * Determine whether the user can view the model.
     * @param  \App\Models\User|null  $user
     */
    public function view(?User $user, Worker $worker): bool
    {
        // return $user;
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Worker $worker)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Worker $worker)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Worker $worker)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Worker $worker)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
        return true;
    }
}
