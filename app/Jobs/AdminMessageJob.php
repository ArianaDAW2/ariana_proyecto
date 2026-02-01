<?php

namespace App\Jobs;

use App\Mail\AdminMessageMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;


class AdminMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public User $user;
    public string $title;
    public string $body;

    public function __construct(User $user, string $title, string $body)
    {
        $this->user = $user;
        $this->title = $title;
        $this->body = $body;

        //$this->onQueue('emails');

    }

    public function handle(): void
    {
        sleep(10);

        Mail::to($this->user->email)->send(
            new AdminMessageMail(
                $this->title,
                $this->body
            ));
    }
}
