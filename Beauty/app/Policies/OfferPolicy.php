<?php

namespace App\Policies;

use App\User;
use App\Offer;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function edit (User $user, Offer $offer)
    {
        return $user->id == $offer->user_id or $user->rol==TRUE;
    }
    public function delete (User $user, Offer $offer)
    {
        return $user->id == $offer->user_id or $user->rol==TRUE;
    }
}
