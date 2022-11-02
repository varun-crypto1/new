<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;


Route::get('/',[TestingController::class,'show']);
