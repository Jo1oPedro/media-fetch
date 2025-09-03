<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MediaController extends Controller
{
    public function updateMediaStatus(Request $request, Media $media)
    {
        Log::error(
            print_r(
                [
                    $request->input("url"),
                    $request->input("status")
                ],
                true
            )
        );
        return response()->json(["dale"]);
    }
}
