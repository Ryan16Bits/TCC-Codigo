<?php

namespace App\Mail;

use App\Models\Convite;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConviteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $convite;
    public $convidadorNome;

    public function __construct(Convite $convite)
    {
        $this->convite = $convite;
        $this->convidadorNome = $convite>convidador->name ?? 'Administrador';
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Você foi convidado para criar uma nova conta!',
        );
    }

    public function content(): Conteudo
    {
        return new Conteudo(
            view: 'email.convite',
        );
    }

    public function attachments(): array
    {
        return [];
    }

}
