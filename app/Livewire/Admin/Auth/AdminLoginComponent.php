<?php

namespace App\Livewire\Admin\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLoginComponent extends Component
{

    public $email;
    public $password;
    public $remember;
    public function render()
    {
        return view('livewire.admin.auth.admin-login-component');
    }

    public function rules(){
        return [

            'email'=>'required|string|email',
            'password'=>'required',
            'remember'=>'nullable',
        ];
    }

    public function submit()
    {
        $this->validate();
        if (!Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        return to_route('admin.index');
    }
}
