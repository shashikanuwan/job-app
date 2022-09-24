<?php

namespace App\Http\Requests\Account;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class EmployerDetailStoreRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_EMPLOYER);
    }

    public function rules()
    {
        return [
            'company_name' => 'required|string',
            'company_register_number' => 'required|string',
        ];
    }
}
