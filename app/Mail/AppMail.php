<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public string $request_subject,
        public string $request_body
    )
    {
        //
    }

    public function build()
    {
        return $this->subject($this->request_subject)->view('mails.urllate',[
            'request_subject'=> $this->request_subject,
            'request_body'=> $this->request_body,
        ]);
    }
}