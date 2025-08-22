<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ReportController;
use App\Http\Controllers\API\StaffController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/staff', [StaffController::class, 'index']);  // Obtener todos los registros de personal
Route::post('/staff', [StaffController::class, 'store']); // Guardar un nuevo registro


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', fn() => auth()->user());

    Route::get('/reports', [ReportController::class, 'index']);
    Route::post('/reports', [ReportController::class, 'store']);
    Route::patch('/reports', [ReportController::class, 'updateStatus']);



    
});