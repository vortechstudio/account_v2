<?php

namespace App\Livewire\Forms\Account;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EmailChangeForm extends Form
{
    #[Validate(['required', 'email'])]
    public string $email = '';

    public function update()
    {
        $this->validate();
        try {
            \Auth::user()->update([
                'email' => $this->email
            ]);

            \Auth::user()->logs()->create([
                'action' => "Changement de l'adresse Mail",
                'user_id' => \Auth::id()
            ]);
            $this->reset();
        }catch (\Exception $exception) {
            \Log::emergency($exception->getMessage(), ['exception' => $exception]);
        }
    }
}
