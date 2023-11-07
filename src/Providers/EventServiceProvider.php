<?php

namespace Digitlimit\Githook\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // 'Digitlimit\Githook\Events\GithookEvent' => [
        //     'Digitlimit\Githook\Listeners\GithookListener',
        // ],
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
