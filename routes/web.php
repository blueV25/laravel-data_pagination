<?php

use App\Http\Controllers\data_paginationController;
use Illuminate\Support\Facades\Route;

Route::get('/',[data_paginationController::class,'index']);
