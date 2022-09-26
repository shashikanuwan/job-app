<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRegistrationActionRequest;
use App\Models\User;
use App\Notifications\UserRegister;

class UserRegistrationRequestController extends Controller
{
    public function __invoke(UserRegistrationActionRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->notify(new UserRegister($user));

        return back()->with('success', 'User account update successful');
    }
}
