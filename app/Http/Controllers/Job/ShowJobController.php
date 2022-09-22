<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;

class ShowJobController extends Controller
{
    public function __invoke(Job $job)
    {
        return view('Pages.Job.show')
            ->with([
                'job' => $job
            ]);
    }
}
