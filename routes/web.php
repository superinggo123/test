<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[TestController::class,'index']);
Route::get('create',[TestController::class, 'create']);
Route::post('save', [TestController::class, 'save']);
Route::get('edit/{id}', [TestController::class,'edit']);
Route::post('update', [TestController::class, 'update']);
Route::get('delete/{id}', [TestController::class, 'delete']);
