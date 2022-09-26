<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDeleteController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $user->delete();

        return back()->with('success', 'User account delete successful');
    }
}
