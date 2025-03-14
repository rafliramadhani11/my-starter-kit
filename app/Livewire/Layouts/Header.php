<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
