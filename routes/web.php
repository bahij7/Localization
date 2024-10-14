<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('locale/{lang}', [LocalController::class, 'setLocale'])->name('setLocale');
