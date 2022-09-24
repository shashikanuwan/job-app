<?php

namespace App\Http\Requests\Account;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeDetailStoreRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_EMPLOYEE);
    }

    public function rules()
    {
        $dt = new Carbon();
        $before18Years = $dt->subYears(18)->format('Y-m-d');

        return [
            'dob' => 'required|date|before:' . $before18Years
        ];
    }
}
