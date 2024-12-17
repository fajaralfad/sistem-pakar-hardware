<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/diagnosa', [DiagnosaController::class, 'diagnosa']);
Route::get('/diagnosa', [DiagnosaController::class, 'index']);

use App\Models\Solusi;
use Illuminate\Http\Request;

Route::get('/solusi', function () {
    $solusis = Solusi::all();
    return response()->json($solusis);
});


