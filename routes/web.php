<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tiempo');
});

Route::get('/tiempo',[ApiController::class,'Tiempo']);
