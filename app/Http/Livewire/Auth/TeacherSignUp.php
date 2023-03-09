<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class TeacherSignUp extends Component
{
    public function render()
    {
        return view('livewire.auth.teacher-sign-up')
        ->extends('layouts.app');
    }
}
