<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilanHalaman1Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman1', [TampilanHalaman1Controller::class, 'index'])->name('halaman1');
