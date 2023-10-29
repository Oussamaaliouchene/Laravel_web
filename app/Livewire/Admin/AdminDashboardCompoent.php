<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboardCompoent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-compoent')->layout('layouts.base');
    }
}
