<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreviousJobRequestController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Employer.previous-job-request');
    }
}
