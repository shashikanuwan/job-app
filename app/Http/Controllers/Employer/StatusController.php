<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employer\StatusRequest;
use App\Models\Applying;
use App\Notifications\JobStatus;

class StatusController extends Controller
{
    public function __invoke(StatusRequest $request, Applying $applying)
    {
        $applying->status($request->get('status'));
        $applying->employee->notify(new JobStatus($applying));

        return back()
            ->with('success', 'Applying status successful');
    }
}
