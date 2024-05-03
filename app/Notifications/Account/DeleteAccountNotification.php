<?php

namespace App\Notifications\Account;

use App\Models\User\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DeleteAccountNotification extends Notification
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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Confirmation de la suppression de votre compte sur notre plateforme')
            ->greeting('Cher Joueur,')
            ->line('Nous avons bien reçu votre demande de suppression de compte sur notre plateforme. Nous sommes désolés de vous voir partir.')
            ->line('Nous tenons à vous informer que votre compte a été supprimé avec succès. Toutes vos informations personnelles, ainsi que vos progrès dans les jeux, ont été définitivement effacés de nos serveurs conformément à notre politique de confidentialité.')
            ->line('Si vous changez d’avis à l’avenir, sachez que nous serions ravis de vous accueillir à nouveau sur notre plateforme. Cependant, veuillez noter que vous devrez créer un nouveau compte et que vos anciens progrès dans les jeux ne pourront pas être récupérés.')
            ->line('Si vous avez des questions ou des préoccupations, n’hésitez pas à nous contacter à notre service clientèle.')
            ->line('Merci d’avoir choisi notre plateforme pour vos expériences de jeu. Nous espérons vous revoir bientôt.')
            ->salutation('Cordialement,');
    }
}
