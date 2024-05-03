<?php

namespace App\Livewire\Forms\Account;

use Illuminate\Validation\Rules\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PasswordChangeForm extends Form
{
    use LivewireAlert;
    #[Validate('required')]
    public string $currentPassword = '';
    #[Validate('required', Password::class)]
    public string $newPassword = '';

    public function update()
    {
        $this->validate();

        try {
            \Auth::user()->update([
                'password' => \Hash::make($this->newPassword)
            ]);

            \Auth::user()->logs()->create([
                'action' => "Changement du mot de passe d'accès",
                'user_id' => \Auth::user()->id
            ]);
            $this->reset();
        }catch (\Exception $exception) {
            \Log::emergency($exception->getMessage());
        }
    }
}
