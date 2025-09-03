<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MediaDownloadController extends Controller
{
    public function download(Request $request): JsonResponse
    {
        Log::info("Download solicitado", [
            "url" => $request->input("url"),
            "ip" => $request->ip(),
        ]);

        return response()->json(["message" => "Url salva com sucesso!"]);
    }
}
