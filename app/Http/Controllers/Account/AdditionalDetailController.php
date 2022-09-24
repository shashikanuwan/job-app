<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\AdditionalDetailRequest;
use App\Http\Requests\Account\EmployeeDetailStoreRequest;
use App\Http\Requests\Account\EmployerDetailStoreRequest;

class AdditionalDetailController extends Controller
{
    public function index(AdditionalDetailRequest $request)
    {
        return view('Pages.Account.additional-detail');
    }

    public function employerDetailStore(EmployerDetailStoreRequest $request)
    {
        $request->user()->update($request->validated());

        return redirect()
            ->route('account.verify')
            ->with('success', 'Account created successfully');
    }

    public function employeeDetailStore(EmployeeDetailStoreRequest $request)
    {
        $request->user()->update($request->validated());

        return redirect()
            ->route('account.verify')
            ->with('success', 'Account created successfully');
    }
}
