<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function () {
   return view("auth/login");
});

Route::get("/download", function() {
   return view("download/index");
});
