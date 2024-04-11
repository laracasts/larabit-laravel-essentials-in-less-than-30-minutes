<?php

use App\Http\Controllers\ContactController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'storeMessage']);
Route::get('/messages', [ContactController::class, 'showMessages']);