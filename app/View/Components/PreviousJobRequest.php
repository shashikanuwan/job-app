<?php

namespace App\View\Components;

use App\Models\Applying;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class PreviousJobRequest extends Component
{
    public Collection $applyings;

    public function __construct()
    {
        return $this->applyings = Applying::query()
            ->previous()
            ->ofEmployer(Auth::user())
            ->with('job.subCategory.category', 'job.employer')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function render()
    {
        return view('components.previous-job-request');
    }
}
