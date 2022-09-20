<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Employee.dashboard');
    }
}
