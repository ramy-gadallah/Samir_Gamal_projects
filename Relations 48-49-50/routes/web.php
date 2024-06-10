<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

///////////////////////// Start Relation one to one ///////////////////////////////////////////////////////////

                            // use model (User - Phone )
                            // use migrations (users - phones )
                            // use controller  (UserController)
Route::get('phone',[UserController::class,'phone'])->name('phone');
Route::get('user',[UserController::class,'user'])->name('user');
///////////////////////// End Relation one to one ///////////////////////////////////////////////////////////

///////////////////////// Start Relation one to many ///////////////////////////////////////////////////////////

                            // use model (Post - Comment )
                            // use migrations (posts - comments )
                            // use controller  (PostController)
Route::get('posts',[PostController::class,'posts'])->name('posts');
Route::get('comments',[PostController::class,'comments'])->name('comments');

///////////////////////// end Relation one to many ///////////////////////////////////////////////////////////

Route::get('get_roles',[UserController::class,'get_roles'])->name('get_roles');
Route::get('get_user',[UserController::class,'get_user'])->name('get_user');


