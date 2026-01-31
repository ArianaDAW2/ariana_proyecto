<?php

namespace App\Listeners;

use App\Events\AdminMessageEvent;
use App\Jobs\AdminMessageJob;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class AdminMessageListener
{
    public function __construct()
    {
    }

    public function handle(AdminMessageEvent $event): void
    {
        $users = User::all();
        foreach ($users as $user) {
            AdminMessageJob::dispatch(
                $user,
                $event->title,
                $event->body
            );
        }
        //worker: emails 1 vez
        Artisan::call('admin:message');

    }
}
