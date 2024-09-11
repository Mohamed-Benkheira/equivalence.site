<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use App\Models\LicenseRequest;

class LicenseRequestResponse extends Mailable
{
    use Queueable, SerializesModels;

    public $licenseRequest;
    public $emailMessage;
    public $attachmentPath;
    public $status;

    /**
     * Create a new message instance.
     */
    public function __construct(
        LicenseRequest $licenseRequest,
        string $emailMessage,
        string $status,
        ?string $attachmentPath = null
    ) {
        $this->licenseRequest = $licenseRequest;
        $this->emailMessage = $emailMessage;
        $this->status = $status;
        $this->attachmentPath = $attachmentPath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->status === 'accepted' ? 'License Request Accepted' : 'License Request Declined';

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.license-request-response',
        );

    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // Only attach a file if $attachmentPath is not null and if the request is accepted
        if ($this->attachmentPath && $this->status === 'accepted') {
            return [
                Attachment::fromPath(storage_path('app/public/' . $this->attachmentPath)),
            ];
        }

        // No attachments for declined requests or if no attachment path is provided
        return [];
    }
}