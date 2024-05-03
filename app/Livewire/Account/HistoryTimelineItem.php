<?php

namespace App\Livewire\Account;

use App\Models\User\UserLog;
use Livewire\Component;

class HistoryTimelineItem extends Component
{
    public UserLog $log;

    public function render()
    {
        return view('livewire.account.history-timeline-item');
    }
}
