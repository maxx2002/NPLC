<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $team, $school, $leader, $member1, $member2;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($team, $school, $leader, $member1, $member2)
    {
        $this->team = $team;        
        $this->school = $school;
        $this->leader = $leader;
        $this->member1 = $member1;
        $this->member2 = $member2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.sendemail');
    }
}
