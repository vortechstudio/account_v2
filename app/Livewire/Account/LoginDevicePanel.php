<?php

namespace App\Livewire\Account;

use Livewire\Component;

class LoginDevicePanel extends Component
{
    public bool $isActual = false;
    public $device;
    public function render()
    {
        return view('livewire.account.login-device-panel');
    }
}
