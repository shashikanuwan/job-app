<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegister extends Notification
{
    use Queueable;
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line(
                'Your account has been' . ' ' .
                    $this->user->getAccountStatusAttribute() . ' ' .
                    'by admin'
            )
            ->action('Go to the dashboard', url('/employee/dashboard'))
            ->line('Thanks for using example.lk');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
