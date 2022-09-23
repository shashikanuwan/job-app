<?php

namespace App\Http\Requests\Employer;

use Illuminate\Foundation\Http\FormRequest;

class JobEditRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('edit', $this->route('job'));
    }

    public function rules()
    {
        return [];
    }
}
