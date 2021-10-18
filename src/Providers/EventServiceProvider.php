<?php

namespace Digitlimit\Githook\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Digitlimit\Githook\Events\NoPayload;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // PostWasCreated::class => [
        //     UpdatePostTitle::class,
        // ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
