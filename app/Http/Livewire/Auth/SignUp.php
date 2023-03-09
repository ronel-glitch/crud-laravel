<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Http\Traits\AlertTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SignUp extends Component
{
    use AlertTrait;

    public $user;
    public $password;
    public $confirm_password;

    public function render()
    {
        return view('livewire.auth.sign-up')
        ->extends('layouts.app');
    }

    public function rules(){
        return[
            'user.name' => 'required',
            'user.email' => 'required|email|unique:users,email',
            'password' =>[
                'required',
                'max:200',
                // Password::min(9)->letters()->mixedCase()->numbers()->symbols()->uncompromised(),
            ],
            'confirm_password' => 'required|same:password',
        ];
    }

    protected $validationAttributes =[
        'user.name' => 'name',
        'user.email' => 'email address',
        'password' => 'password',
    ];

    public function save()
    {
        $data =  $this->validate();
        $data['user']['password'] = Hash::make($data['password']);
        $data['user']['user_type'] = 'student';
        if(User::create($data['user'])){

            $this->session_flash_alert_success('Success!', 'Registered Successfully');

            return redirect()->route('sign.in');
        }
    }
}
