<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class orderShipped extends Mailable
{
    use Queueable;
    use SerializesModels;

    private $firstName;

    private $lastName;

    private $truckingNumber;

    /**
     * Create a new message instance.
     */
    public function __construct(string $firstName, string $lastName, int $truckingNumber)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->truckingNumber = $truckingNumber;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'order Shipped',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.order-shipped',
            with: [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'truckingNumber' => $this->truckingNumber,
            ]
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
}
