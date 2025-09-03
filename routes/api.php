<?php

use App\Http\Controllers\Api\MediaDownloadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/download/media", [MediaDownloadController::class, "download"]);

Route::get("/dale", function () {
   return response()->json(["response" => "dale123"]);
});
