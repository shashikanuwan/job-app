<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRegistrationActionRequest;
use App\Models\User;

class UserRegistrationRequestController extends Controller
{
    public function __invoke(UserRegistrationActionRequest $request, User $user)
    {
        $user->update($request->validated());

        return back()->with('success', 'User account update successful');
    }
}
