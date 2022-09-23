<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employer\ActionRequest;
use App\Models\Applying;

class ActionController extends Controller
{
    public function __invoke(ActionRequest $request, Applying $applying)
    {
        $applying->status($request->get('status'));

        return back()
            ->with('success', 'Applying status successful');
    }
}
