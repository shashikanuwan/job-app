<?php

namespace App\Http\Requests\Employer;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_EMPLOYER);
    }

    public function rules()
    {
        return [
            'title' => 'required|string',
            'expiry_date' => 'required|date|after:today',
            'minimum_salary' => 'required|integer',
            'maximum_salary' => 'required|integer',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'district_id' => 'required|exists:districts,id',
            'work_location_id' => 'required|exists:work_locations,id',
            'employment_type_id' => 'required|exists:employment_types,id',
            'description' => 'required',
        ];
    }
}
