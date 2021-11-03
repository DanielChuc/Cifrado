<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MacetaController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('macetas', [MacetaController::class,'index'])->name('macetas.index');
Route::post('macetas', [MacetaController::class,'store'])->name('macetas.store');
