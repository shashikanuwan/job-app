<?php

namespace App\View\Components;

use App\Models\District;
use App\Models\EmploymentType;
use App\Models\Job;
use App\Models\SubCategory;
use App\Models\WorkLocation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class JobEdit extends Component
{
    public Collection $subCategories;
    public Collection $districts;
    public Collection $workLocations;
    public Collection $employmentTypes;
    public $job;

    public function __construct(Job $job)
    {
        $this->job = $job;
        $this->subCategories = SubCategory::query()->get();
        $this->districts = District::query()->get();
        $this->workLocations = WorkLocation::query()->get();
        $this->employmentTypes = EmploymentType::query()->get();
    }

    public function render()
    {
        return view('components.job-edit');
    }
}
