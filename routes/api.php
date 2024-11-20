<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::prefix('client')->group(function () {
    Route::post('/login', [AuthController::class, 'auth'])->name('client.login');
    // Route::post('/register', [RegisterController::class, 'register'])->name('client.register');
});

$router->post('authenticate',  [AuthController::class, 'auth']);
$router->post('authenticate_md5',  [AuthController::class, 'auth']);



Route::get('/user', function (Request $request) {
    return $request->user();
});
