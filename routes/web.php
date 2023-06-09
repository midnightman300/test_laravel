<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('master', ['content' => 'start_page', 'data' => []]);
});

Route::get('/react', function () {
    return view('master', ['content' => 'react', 'data' => []]);
});

Route::get('/list', [TaskController::class, 'index']);
Route::get('/swapi', [ApiController::class, 'index']);
