<?php

namespace App\View\Components;

use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class EmployerJobCard extends Component
{
    public Collection $jobs;
    public function __construct()
    {
        return $this->jobs = Job::query()
            ->where('user_id', Auth::user()->id)
            ->with('subCategory.category', 'employer')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function render()
    {
        return view('components.employer-job-card');
    }
}
