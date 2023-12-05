<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/frm',[ProductController::class,'show']);
Route::post('/frm',[ProductController::class,'store'])->name('post');
Route::get('/display',[ProductController::class,'getProd'])->name('display');

Route::get('/delprod/{id}', [ProductController::class, 'delProd'])->name('del');
// Update Route
Route::get('/fetchProd/{Product_Id}',[ProductController::class,'fetchProd']);
Route::post('/updateProd',[ProductController::class,'updateProd']);