<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/diagnosa', [DiagnosaController::class, 'diagnosa']);
Route::get('/diagnosa', [DiagnosaController::class, 'index']);

