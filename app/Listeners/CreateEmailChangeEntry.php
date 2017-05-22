<?php

namespace App\Listeners;

use App\Events\EmailChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\EmailChangeLog;
use Illuminate\Support\Facades\Mail;

class CreateEmailChangeEntry
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EmailChanged  $event
     * @return void
     */
    public function handle(EmailChanged $event)
    {
        $user = $event->user;
        $new_email = $event->new_email;

        $exists = EmailChangeLog::where('user_id', $user->id)->where('status', 'A')->first();
        if (!is_null($exists)) {
            $exists->status = 'D';
            $exists->save();
        }

        $emailChangeEntry = new EmailChangeLog();
        $emailChangeEntry->user_id = $user->id;
        $emailChangeEntry->old_email = $user->email;
        $emailChangeEntry->new_email = $new_email;
        $emailChangeEntry->confirmationToken = str_random(40);
        $emailChangeEntry->save();

        Mail::send('emails.emailChange.confirmation', ['email_change' => $emailChangeEntry], function($m) use ($emailChangeEntry, $user){
            $m->from('info@bneuhausz.com', 'bneuhausz');
            $m->to($user->email, $user->name);
            $m->subject(trans('email.emailChange'));
        });
    }
}
