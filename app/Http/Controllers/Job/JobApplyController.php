<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\JobApplyReuest;
use App\Models\Applying;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class JobApplyController extends Controller
{
    public function __invoke(JobApplyReuest $request)
    {
        $applying =  Applying::create([
            'working_status' => $request->get('working_status'),
            'job_id' => $request->get('job_id'),
            'user_id' => $request->user()->id,
        ]);

        $this->storeFile($applying, $request->file('cv'));

        return redirect()
            ->route('employee.dashboard')
            ->with('success', 'Job application submission was successful');
    }

    private function storeFile(Applying $applying, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $applying->id . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('applying/' . $filename, file_get_contents(request()->file('cv')->getRealPath()), 'public');
            $applying->cv = $filename;
            $applying->save();
        }
    }
}
