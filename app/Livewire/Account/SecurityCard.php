<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\Account\PasswordChangeForm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SecurityCard extends Component
{
    use LivewireAlert;
    public PasswordChangeForm $form;

    public function save()
    {
        try {
            $this->form->update();
            $this->alert('success', "Mot de passe changée avec success");
        }catch (\Exception $exception) {
            $this->alert('error', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.account.security-card');
    }
}
