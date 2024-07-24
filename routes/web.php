<?php
    // Routes pour le login
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;

    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'doLogin']);

