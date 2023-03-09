<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.student.dashboard')
        ->extends('layouts.app');
    }
}
