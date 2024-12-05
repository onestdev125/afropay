<?php 

use Illuminate\Support\Facades\Route;

Route::post('/afropay/callback', function () {
    // Handle payment callback logic here
})->name('afropay.callback');