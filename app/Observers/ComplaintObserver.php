<?php

namespace App\Observers;

use App\Models\Complaint;

class ComplaintObserver
{

    public function creating(Complaint $complaint)
    {
        $complaint->uuid = \Illuminate\Support\Str::uuid();
    }

    /**
     * Handle the Complaint "created" event.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return void
     */
    public function created(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the Complaint "updated" event.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return void
     */
    public function updated(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the Complaint "deleted" event.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return void
     */
    public function deleted(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the Complaint "restored" event.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return void
     */
    public function restored(Complaint $complaint)
    {
        //
    }

    /**
     * Handle the Complaint "force deleted" event.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return void
     */
    public function forceDeleted(Complaint $complaint)
    {
        //
    }
}
