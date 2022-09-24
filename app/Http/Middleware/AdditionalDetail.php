<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AdditionalDetail
{
    public function handle(Request $request, Closure $next, $redirectToRoute = null)
    {
        if ($request->user()->isEmployer()) {
            if (!$request->user()->isCompanyNotNull()) {
                return $request->expectsJson()
                    ? abort(403, 'Add additional details')
                    : Redirect::guest(URL::route($redirectToRoute ?: 'additional.detail.index'));
            }
        }

        if ($request->user()->isEmployee()) {
            if (!$request->user()->isDobNotNull()) {
                return $request->expectsJson()
                    ? abort(403, 'Add additional details')
                    : Redirect::guest(URL::route($redirectToRoute ?: 'additional.detail.index'));
            }
        } else {
            return $next($request);
        }
    }
}
