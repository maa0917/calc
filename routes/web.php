<?php

declare(strict_types=1);

use App\Http\Controllers\Calc;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc', Calc::class);
Route::post('/calc', Calc::class)->name('calc');
