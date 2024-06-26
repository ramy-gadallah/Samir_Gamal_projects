<?php

use App\Http\Controllers\PostController;
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

Route::get('/home', function () {
    return view('welcome');
})->name('home');


    Route::get('create',[PostController::class,'create'])->name('post.create');
    Route::post('store',[PostController::class,'store'])->name('post.store');

    Route::get('edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('update/{id}',[PostController::class,'update'])->name('post.update');
    
    Route::get('/',[PostController::class,'index'])->name('post.index');
    Route::get('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
    Route::delete('delete/trancate',[PostController::class,'deleteTrancate'])->name('post.deleteTrancate');
;

