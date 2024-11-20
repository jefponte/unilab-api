<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::prefix('client')->group(function () {
    // Route::post('/login', [AuthController::class, 'auth'])->name('client.login');
    // Route::post('/register', [RegisterController::class, 'register'])->name('client.register');
});

Route::get('/user', function (Request $request) {
    return $request->user();
});

//Rotas antigas.
Route::post('/authenticate', function (Request $request) {
    return ["OLA" => "JEF"];
});
