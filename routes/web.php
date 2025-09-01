<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home/index");
});

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthController::class, "showLogin"])->name("login.form");
    Route::post("/login", [AuthController::class, "login"])->name("login");

    Route::get("/register", [AuthController::class, "showRegister"])->name("register.form");
    Route::post("/register", [AuthController::class, "register"])->name("register");
});

Route::middleware("auth")->group(function () {
    Route::get("/download", function() {
        return view("dashboard/index");
    })->name("download");
});
