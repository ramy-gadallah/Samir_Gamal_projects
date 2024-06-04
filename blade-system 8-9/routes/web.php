<?php

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



Route::get('admin',function(){
    $test=1;
    return view('admin',compact('test'));
});
Route::get('nav',function(){
    return view('Layouts.nav');
});

Route::get('main', function () {
    return view('main');
})->name('main');

Route::get('users',function(){
    return view('users');
})->name('users');

Route::get('posts',function(){
    return view('posts');
})->name('posts');