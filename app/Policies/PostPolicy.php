<?php

namespace App\Policies;

use App\User;
use App\PostTour;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post tour.
     *
     * @param  \App\User  $user
     * @param  \App\PostTour  $postTour
     * @return mixed
     */
    public function view(User $user, PostTour $postTour)
    {
//        return  $user->id === $postTour->user_id;
    }

    /**
     * Determine whether the user can create post tours.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the post tour.
     *
     * @param  \App\User  $user
     * @param  \App\PostTour  $postTour
     * @return mixed
     */
    public function update(User $user, PostTour $postTour)
    {
        //
    }

    /**
     * Determine whether the user can delete the post tour.
     *
     * @param  \App\User  $user
     * @param  \App\PostTour  $postTour
     * @return mixed
     */
    public function delete(User $user, PostTour $postTour)
    {
        //
    }

    /**
     * Determine whether the user can restore the post tour.
     *
     * @param  \App\User  $user
     * @param  \App\PostTour  $postTour
     * @return mixed
     */
    public function restore(User $user, PostTour $postTour)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post tour.
     *
     * @param  \App\User  $user
     * @param  \App\PostTour  $postTour
     * @return mixed
     */
    public function forceDelete(User $user, PostTour $postTour)
    {
        //
    }
}
