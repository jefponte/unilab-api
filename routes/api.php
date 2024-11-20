<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('client')->group(function () {
    Route::post('/login', [AuthController::class, 'auth'])->name('client.login');
});

$router->post('authenticate',  [AuthController::class, 'auth']);
$router->post('authenticate_md5',  [AuthController::class, 'auth']);

Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');
Route::get('/bond', [AuthController::class, 'bond'])->middleware('auth:sanctum');


Route::middleware(['auth:sanctum', 'abilities:admin'])->prefix('admin')->group(function () {
    Route::get('/hability1', function () {
        return response()->json([
            'hability' => 'super_user'
        ]);
    });
});