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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post',PostController::class);
Route::get('home',[PostController::class,'home'])->name('home');
Route::get('deleteAll',[PostController::class,'deleteAll'])->name('deleteAll');
Route::get('delete/{id}',[PostController::class,'delete'])->name('delete');
Route::get('AllSoftDelete',[PostController::class,'AllSoftDelete'])->name('AllSoftDelete');
Route::get('Restore/{id}',[PostController::class,'Restore'])->name('Restore');
Route::get('ForceDelete/{id}',[PostController::class,'ForceDelete'])->name('ForceDelete');
Route::post('updates/{id}',[PostController::class,'updates'])->name('updates');

