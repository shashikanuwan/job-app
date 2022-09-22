<?php

namespace App\Http\Requests\Job;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class JobApplyReuest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_EMPLOYEE);
    }

    public function rules()
    {
        return [
            'cv' => 'mimes:pdf|required',
            'working_status' => 'required|in:Yes,No',
            'job_id' => 'required|exists:jobs,id',
        ];
    }
}
