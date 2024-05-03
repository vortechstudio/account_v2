<?php

namespace App\Notifications\Admin;

use App\Models\User\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserDeleteNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public User $user)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable): array
    {
        return [
            'type' => 'danger',
            'icon' => 'fa-user-xmark',
            'title' => 'Alerte concernant un utilisateur',
            'description' => "l'utilisateur {$this->user->name} à supprimer sont compte VortechStudio",
            'time' => now(),
            'sector' => 'alerts',
        ];
    }

    public function toArray($notifiable): array
    {
        return [
            'type' => 'danger',
            'icon' => 'fa-user-xmark',
            'title' => 'Alerte concernant un utilisateur',
            'description' => "l'utilisateur {$this->user->name} à supprimer sont compte VortechStudio",
            'time' => now(),
            'sector' => 'alerts',
        ];
    }
}
