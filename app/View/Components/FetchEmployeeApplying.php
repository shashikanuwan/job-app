<?php

namespace App\View\Components;

use App\Models\Applying;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class FetchEmployeeApplying extends Component
{
    public Collection $applyings;

    public function __construct()
    {
        return $this->applyings = Applying::query()
            ->pending()
            ->ofEmployer(Auth::user())
            ->with('job.subCategory.category', 'job.employer')
            ->orderBy('id', 'asc')
            ->get();
    }

    public function render()
    {
        return view('components.fetch-employee-applying');
    }
}
