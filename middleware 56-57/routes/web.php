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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::middleware(['Check_age','auth'])->group(function(){ // Middleware For Route 
   
    Route::get('posts',[PostController::class,'index'])->name('posts'); //route inside controller
    Route::get('test',[PostController::class,'test'])->name('test');   //route inside controller 

});


