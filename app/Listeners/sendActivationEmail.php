<?php

namespace App\Listeners;

use App\Events\activateAccount;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\activateEmail;
//use App\Mail\activateEmail;
use App\Mail\ActivateUser;

class sendActivationEmail
{
    /**
     * Create the event listener.

     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  activateAccount  $event
     * @return void
     */
    public function handle(activateAccount $event)
    {
    
    Mail::to($event->user->email)->send(new ActivateUser($event->user));

}}
