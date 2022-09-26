<?php

namespace App\Http\Requests\Admin;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationActionRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_ADMIN);
    }

    public function rules()
    {
        return [
            'verify_account' => 'required|in:0,1'
        ];
    }
}
