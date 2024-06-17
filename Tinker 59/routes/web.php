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

Route::get('/', function () {
    return view('welcome');
});

//بحفظ بيها داتا ف الداتا بيز  command line دا عبارة عن اوامر ف ال tinker ال 

// 1- php artisan tinker -> اكتب فيه  tinker كده انا بفتح 
// 2- Terminal اكتب ف ال  controller  اول طريقة طريقة حفظ الداتا عادى جدا بس بدل م اكتب ف ال 
// User::create([ 'name'=>'samir_gamal','email'=>'samir@yahoo.com','password'=>Hash::make('1234565432345')])
// 3- بتاعى  model من ال  object تانى طريقة عن طريق اعمل 
// $user = new User();
// $user->name='hoda' ثم اضغط انتر 
// $user->email='hoda@gmail.com' ثم اضغط انتر 
// $user->password = Hash::make('45434743734) ثم اضغط انتر 
// $user->save();
 // exit عن طريق tinker ثم اخرج من ال 

