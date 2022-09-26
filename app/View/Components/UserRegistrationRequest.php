<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class UserRegistrationRequest extends Component
{
    public Collection $users;
    public function __construct()
    {
        $this->users = User::query()
            ->where('verify_account', 0)
            ->with('roles')
            ->get();
    }

    public function render()
    {
        return view('components.user-registration-request');
    }
}
