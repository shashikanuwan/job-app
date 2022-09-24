<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class AdditionalDetailRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->user()->isEmployer()) {
            if (!$this->user()->isCompanyNotNull()) {
                return true;
            }
            return abort(403, 'You have already submitted account details');
        }

        if ($this->user()->isEmployee()) {
            if (!$this->user()->isDobNotNull()) {
                return true;
            }
            return abort(403, 'You have already submitted account details');
        }
    }

    public function rules()
    {
        return [];
    }
}
