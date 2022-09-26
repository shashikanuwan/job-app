<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvRequest;
use App\Models\Applying;

class CvController extends Controller
{
    public function __invoke(CvRequest $request, Applying $applying)
    {

        return response()->download('storage/applying/' . $applying->cv);
    }
}
