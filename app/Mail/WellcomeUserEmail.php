<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WellcomeUserEmail extends Mailable
{
    use Queueable, SerializesModels;



    public function __construct()
    {

    }


    public function envelope()
    {
        return new Envelope(
            subject: 'Wellcome User Email',
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail',


        );
    }


    public function attachments()
    {
        return [];
    }
}
