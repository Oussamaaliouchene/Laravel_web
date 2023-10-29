<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserDashboardCompoent extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashboard-compoent')->layout('layouts.base');
    }
}
