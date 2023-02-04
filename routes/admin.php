<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetLinkController;


Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest:admin')
                ->name('password.email');
