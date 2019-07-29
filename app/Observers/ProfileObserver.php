<?php

namespace App\Observers;
use Auth;
use App\profile;
use App\ProfilePersonalInfo;

class ProfileObserver
{
    /**
     * Handle the profile "created" event.
     *
     * @param  \App\profile  $profile
     * @return void
     */
    public function created(profile $profile)
    {
        $show = [1,2,3,4,5,6];
        $show_type = json_encode($show);
        return ProfilePersonalInfo::create(['profile_id' => $profile->id, 'show' => $show_type]);
    }

    /**
     * Handle the profile "updated" event.
     *
     * @param  \App\profile  $profile
     * @return void
     */
    public function updated(profile $profile)
    {
        //
    }

    /**
     * Handle the profile "deleted" event.
     *
     * @param  \App\profile  $profile
     * @return void
     */
    public function deleted(profile $profile)
    {
        //
    }

    /**
     * Handle the profile "restored" event.
     *
     * @param  \App\profile  $profile
     * @return void
     */
    public function restored(profile $profile)
    {
        //
    }

    /**
     * Handle the profile "force deleted" event.
     *
     * @param  \App\profile  $profile
     * @return void
     */
    public function forceDeleted(profile $profile)
    {
        //
    }
}
