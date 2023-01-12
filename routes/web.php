<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\NewsflashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'newsflashes'  => NewsflashController::class,
    'applications' => ApplicationController::class,
]);
