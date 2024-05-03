<?php

namespace App\Livewire\Account;

use App\Livewire\Forms\Account\EmailChangeForm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InfoCard extends Component
{
    use LivewireAlert;
    public EmailChangeForm $form;

    public function save()
    {
        try {
            if($this->form->email == \Auth::user()->email) {
                $this->alert('warning', "L'adresse Mail ne peut pas être la même que la précédente !");
            } else {
                $this->form->update();
                $this->alert('success', 'Adresse Mail changer avec succès');
            }
        }catch (\Exception $exception) {
            $this->alert("error", $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.account.info-card');
    }
}
