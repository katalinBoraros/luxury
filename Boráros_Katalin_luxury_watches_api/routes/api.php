<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\WatchController;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('watches', WatchController::class);
Route::get('brands/{brand}/watches', [BrandController::class, 'watchesOfBrand']);
