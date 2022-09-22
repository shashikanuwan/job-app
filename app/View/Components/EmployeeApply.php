<?php

namespace App\View\Components;

use App\Models\Applying;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class EmployeeApply extends Component
{
    public Collection $applyings;

    public function __construct()
    {
        return $this->applyings = Applying::query()
            ->where('user_id', Auth::user()->id)
            ->with('job.subCategory.category', 'job.employer')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function render()
    {
        return view('components.employee-apply');
    }
}
