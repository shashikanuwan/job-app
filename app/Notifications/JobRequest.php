<?php

namespace App\Notifications;

use App\Models\Applying;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobRequest extends Notification
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
            ->line('You have received a job request from' . ' ' .
                $this->applying->employee->name)
            ->action('Go to the dashboard', url('/employer/dashboard'))
            ->line('Thanks for using example.lk');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
