<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

class VerifyController extends Controller
{
    public function __invoke()
    {
        return view('Pages.Account.verify');
    }
}
