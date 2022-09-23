<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employer\JobDeleteRequest;
use App\Http\Requests\Employer\JobEditRequest;
use App\Http\Requests\Employer\JobRequest;
use App\Models\Job;

class EmployerJobController extends Controller
{
    public function index()
    {
        return view('Employer.Job.index');
    }

    public function create()
    {
        return view('Employer.Job.create');
    }

    public function store(JobRequest $request)
    {
        $request->user()->jobs()->create($request->validated());

        return redirect()
            ->route('jobs.index')
            ->with('success', 'job was successfully created');
    }

    public function edit(JobEditRequest $request, Job $job)
    {
        return view('Employer.Job.edit')
            ->with([
                'job' => $job
            ]);
    }

    public function update(JobRequest $request, Job $job)
    {
        $job->update($request->validated());

        return redirect()
            ->route('jobs.index')
            ->with('success', 'job was successfully updated');
    }

    public function destroy(JobDeleteRequest $request, Job $job)
    {
        $job->delete();

        return redirect()
            ->route('jobs.index')
            ->with('success', 'job was successfully deleted');
    }
}
