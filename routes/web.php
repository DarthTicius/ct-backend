<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [CarController::class, "show"]);
// Route::get('/', function () {
// 	return view('welcome');
// });
// get file from api by visiting create-file page
Route::get("/create-file", [FileController::class, "CheckAndCreate"]);
