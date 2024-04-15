<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogoutComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.auth.admin-logout-component');
    }
    public function logout(){
        Auth::guard('web')->logout();

        session()->invalidate();

        session()->regenerateToken();

        return to_route('admin.login');
    }
}
