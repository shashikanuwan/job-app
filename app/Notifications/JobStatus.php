<?php

namespace App\Notifications;

use App\Models\Applying;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobStatus extends Notification
{
    use Queueable;

    private $applying;

    public function __construct(Applying $applying)
    {
        $this->applying = $applying;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line(
                'The application you applied to' . ' ' .
                    $this->applying->job->employer->company_name . ' ' .
                    'company was' . ' ' .
                    $this->applying->status
            )
            ->action('Go to the dashboard', url('/employee/dashboard'))
            ->line('Thanks for using example.lk');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
