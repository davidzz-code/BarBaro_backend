<?php

namespace App\Policies;

use App\Models\Schedule;
use App\Models\User;

class SchedulePolicy
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
    public function view(?User $user, Schedule $schedule): bool
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
    public function update(User $user, Schedule $schedule)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Schedule $schedule)
    {
        return true;
        // return $user && Worker::find($user->worker_id)->role === 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Schedule $schedule)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Schedule $schedule)
    {
        // return $user && Worker::find($user->worker_id)->role === 'admin';
    }
}
