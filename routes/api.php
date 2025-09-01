<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/downloads", function (Request $request) {
   \Illuminate\Support\Facades\Log::info("Download solicitado", [
       "url" => $request->input("url"),
       "ip" => $request->ip(),
   ]);

   return response()->json(["message" => "Url salva com sucesso!"]);
});

Route::get("/dale", function () {
   return response()->json(["response" => "dale123"]);
});
