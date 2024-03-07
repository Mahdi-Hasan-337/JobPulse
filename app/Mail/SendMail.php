<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable {
    use Queueable, SerializesModels;

    public function __construct(public string $url) {}

    public function envelope() {
        return new Envelope(
            subject: 'Login',
        );
    }

    public function content() {
        return new Content(
            markdown: 'emails.login-sendlink',
        );
    }

    public function attachments() {
        return [];
    }
}
