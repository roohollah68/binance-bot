<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

Route::post('/telegram', [TelegramController::class, 'receiveData']);

Route::get('/test', [TelegramController::class, 'test']);

Route::get('/clear', [TelegramController::class, 'clear']);
