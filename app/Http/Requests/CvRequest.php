<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('download', $this->route('applying'));
    }

    public function rules()
    {
        return [];
    }
}
