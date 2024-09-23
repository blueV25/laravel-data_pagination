<?php

use App\Http\Controllers\data_paginationController;
use App\Http\Controllers\datasearchcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[data_paginationController::class,'index']);


Route::get('/api/search-data', [datasearchcontroller::class, 'Search']);
