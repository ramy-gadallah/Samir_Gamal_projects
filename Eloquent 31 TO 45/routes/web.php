<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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
    return view('home');
})->name('home');


Route::get('create',[PostController::class,'create'])->name('create');
Route::post('store',[PostController::class,'store'])->name('store');

Route::get('all',[PostController::class,'all'])->name('all');

Route::get('edit/{id}',[PostController::class,'edit'])->name('edit');
Route::post('update/{id}',[PostController::class,'update'])->name('update');

Route::get('delete/{id}',[PostController::class,'delete'])->name('delete');
Route::get('deleteAll',[PostController::class,'deleteAll'])->name('deleteAll');

// فى جدول منفصل  soft delete اظهار العناصر التى تم حذفها من خلال ال   

Route::get('all_soft_delete',[PostController::class,'all_soft_delete'])->name('all_soft_delete');
Route::get('restore/{id}',[PostController::class,'restore'])->name('restore');
Route::get('forceDelete/{id}',[PostController::class,'forceDelete'])->name('forceDelete');

Route::get('scopeQuery1',[PostController::class,'scopeQuery1'])->name('scopeQuery1'); 
Route::get('scopeQuery2',[PostController::class,'scopeQuery2'])->name('scopeQuery2'); 
