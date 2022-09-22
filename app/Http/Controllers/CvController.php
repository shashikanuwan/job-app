<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvRequest;
use App\Models\Applying;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function __invoke(CvRequest $request, Applying $applying)
    {
        // file path
        $path =  Storage::get('public/applying/' . $applying->cv);

        // header
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $applying->cv . '"'
        ];

        return response()->file($path, $header);
    }
}
