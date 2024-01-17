<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InertiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/inertia-form', [InertiaController::class, 'index']);
Route::post('/fetch-data', [InertiaController::class, 'fetchData']);

Route::get('/', function () {
    return view('welcome');
});
