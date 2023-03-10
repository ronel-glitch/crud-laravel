<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Http\Traits\AlertTrait;
use Illuminate\Support\Facades\Auth;

class TeacherLogin extends Component
{
    use AlertTrait;

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.teacher-login')
        ->extends('layouts.app');
    }


    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'Username cannot be empty.',
        'password.required' => 'Password cannot be empty.',
    ];

    public function signin()
    {
        $this->validate();

        if(Auth::attempt(['email' => trim($this->email), 'password' => trim($this->password)])){

            return redirect()->route('teacher.dashboard');

        }else{

            $this->reset(['email', 'password']);

              $this->alert_error('Error!', 'Wrong Credentials', 'error');
        }

    }
}
