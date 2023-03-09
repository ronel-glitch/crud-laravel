<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class TeacherLogin extends Component
{
    public function render()
    {
        return view('livewire.auth.teacher-login')
        ->extends('layouts.app');
    }
}
