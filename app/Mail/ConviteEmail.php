<?php

namespace App\Mail;

use App\Models\UsuarioModels\Convite;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConviteEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $convite;

    public function __construct(Convite $convite)
    {
        $this->convite = $convite;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Você foi convidado para criar uma nova conta!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.convite',
        );
    }

    public function attachments(): array
    {
        return [];
    }

}
