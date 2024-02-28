<?php

namespace App\Observers;

use App\Models\Flight;

class ArticleObserver
{
    /**
     * Handle the Flight "created" event.
     */
    public function created(Flight $flight): void
    {
        //
    }

    /**
     * Handle the Flight "updated" event.
     */
    public function updated(Flight $flight): void
    {
        $flight = User::find(1);
$flight->save(); //
    }

    /**
     * Handle the Flight "deleted" event.
     */
    public function deleted(Flight $flight): void
    {
    $flight->articles()->delete();
    }

    /**
     * Handle the Flight "restored" event.
     */
    public function restored(Flight $flight): void
    {
        //
    }

    /**
     * Handle the Flight "force deleted" event.
     */
    public function forceDeleted(Flight $flight): void
    {
        //
    }
}
