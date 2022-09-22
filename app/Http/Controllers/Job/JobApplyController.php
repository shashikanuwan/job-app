<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\JobApplyReuest;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobApplyController extends Controller
{
    public function __invoke(JobApplyReuest $request)
    {
        $bool = Job::forId($request->get('job_id'))->firstOrFail();
        if ($bool->hasApply(Auth::user())) {
            return back()->with('primary', 'Already applied');
        }
        $bool->applyJob(Auth::user(), $request->get('working_status'),  $request->file('cv'));

        return redirect()
            ->route('employee.dashboard')
            ->with('success', 'Job application submission was successful');
    }
}
