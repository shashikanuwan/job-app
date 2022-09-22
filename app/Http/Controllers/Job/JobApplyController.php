<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\JobApplyReuest;
use App\Models\Applying;

class JobApplyController extends Controller
{
    public function __invoke(JobApplyReuest $request)
    {
        Applying::create([
            'working_status' => $request->get('working_status'),
            'job_id' => $request->get('job_id'),
            'user_id' => $request->user()->id,
        ]);

        return redirect()
            ->route('employee.dashboard')
            ->with('success', 'Job application submission was successful');
    }
}
