<?php

namespace App\Http\Requests\Employer;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('accept', $this->route('applying'));
    }

    public function rules()
    {
        return [
            'status' => 'required|in:accepted,hold,reject'
        ];
    }
}
