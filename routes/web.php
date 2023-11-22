<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/karir', [HomeController::class, 'karir'])->name('karir');
});
