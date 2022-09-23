<?php

namespace App\Http\Requests\Employer;

use Illuminate\Foundation\Http\FormRequest;

class JobDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('job'));
    }

    public function rules()
    {
        return [];
    }
}
