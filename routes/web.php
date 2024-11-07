<?php

use App\Http\Controllers\ParkController;
use Illuminate\Support\Facades\Route;

Route::controller(ParkController::class)->prefix('park')->name('park.')->group(function(){
    Route::get('/add', 'create')->name('add');
    Route::post('/', 'store')->name('store');
});