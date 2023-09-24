<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($data,$token,$urlToken)
    {
        $this->data = $data;
        $this->token = $token;
        $this->urlToken = $urlToken;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'FoodExpress - Tasdiqlash xabaridan 1 daqiqa ichida tasdiqlash tugmasini boshing',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'inbox.messages',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


      public function build(){
          return $this->view('inbox.messages')
         ->with(['data' => $this->data ,'token' => $this->token ,'urlToken' => $this->urlToken]);
     }

}
