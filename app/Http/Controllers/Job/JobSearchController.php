<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class JobSearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $jobs = Job::query()
            ->with('subCategory.category', 'employer')
            ->when($request->filled('subCategory'), function ($query) use ($request) {
                $subCategoryId = $request->get('subCategory');

                $query->whereHas('subCategory', function (Builder $query) use ($subCategoryId) {
                    $query->where('slug', $subCategoryId);
                });
            })

            ->when($request->filled('employmentType'), function ($query) use ($request) {
                $employmentTypeId = $request->get('employmentType');

                $query->whereHas('employmentType', function (Builder $query) use ($employmentTypeId) {
                    $query->where('slug', $employmentTypeId);
                });
            })

            ->when($request->filled('work_location'), function ($query) use ($request) {
                $workLocationId = $request->get('work_location');

                $query->whereHas('workLocation', function (Builder $query) use ($workLocationId) {
                    $query->where('slug', $workLocationId);
                });
            })

            ->when($request->filled('district'), function ($query) use ($request) {
                $districtId = $request->get('district');

                $query->whereHas('district', function (Builder $query) use ($districtId) {
                    $query->where('slug', $districtId);
                });
            })

            ->paginate(12);

        return view('Pages.Job.index')
            ->with([
                'jobs' => $jobs,
                'selectedCategoryId' => $request->get('subCategory'),
                'selectedEmploymentTypeId' => $request->get('employmentType'),
                'selectedDistrictId' => $request->get('district'),
                'selectedWorkLocationId' => $request->get('work_location'),

            ]);
    }
}