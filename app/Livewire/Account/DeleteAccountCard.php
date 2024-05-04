<?php

namespace App\Livewire\Account;

use App\Models\User\User;
use App\Notifications\Account\DeleteAccountNotification;
use App\Notifications\Admin\UserDeleteNotification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteAccountCard extends Component
{
    use LivewireAlert;
    public function deleteConfirm()
    {
        $this->dispatch('swal:confirm',
        type: 'warning',
        title: "Êtes-vous sur de vous ?",
        text: '');
    }

    #[On('delete')]
    public function delete()
    {
        $user = \Auth::user();
        try {
            foreach (User::where('admin', true)->get() as $admin) {
                $admin->notify(new UserDeleteNotification($user));
            }
            $user->notify(new DeleteAccountNotification($user));
            $user->delete();
            $this->redirect('/auth/logout');
        }catch (\Exception $exception) {
            \Log::emergency($exception->getMessage(), [
                'niveau' => 'Critique',
                'sujet' => "Suppression d'un compte utilisateur",
                'fichier' => $exception->getFile().':'.$exception->getLine(),
                'context' => $exception,
            ]);
            $this->alert("error", "Erreur lors de la suppression de votre compte !");
        }
    }

    public function render()
    {
        return view('livewire.account.delete-account-card');
    }
}
