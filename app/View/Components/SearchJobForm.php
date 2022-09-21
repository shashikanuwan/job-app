<?php

namespace App\View\Components;

use App\Models\District;
use App\Models\EmploymentType;
use App\Models\SubCategory;
use App\Models\WorkLocation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class SearchJobForm extends Component
{
    public ?string $selectedCategoryId;
    public ?string $selectedEmploymentTypeId;
    public ?string $selectedDistrictId;
    public ?string $selectedWorkLocationId;

    public Collection $subCategories;
    public Collection $employmentTypes;
    public Collection $districts;
    public Collection $workLocations;

    public function __construct(string $selectedCategoryId = null, string $selectedEmploymentTypeId = null, string $selectedDistrictId = null, string $selectedWorkLocationId  = null)
    {
        $this->subCategories = SubCategory::query()->get();
        $this->employmentTypes = EmploymentType::query()->get();
        $this->districts = District::query()->get();
        $this->workLocations = WorkLocation::query()->get();

        $this->selectedCategoryId = $selectedCategoryId;
        $this->selectedEmploymentTypeId = $selectedEmploymentTypeId;
        $this->selectedDistrictId = $selectedDistrictId;
        $this->selectedWorkLocationId = $selectedWorkLocationId;
    }

    public function render()
    {
        return view('components.search-job-form');
    }
}
