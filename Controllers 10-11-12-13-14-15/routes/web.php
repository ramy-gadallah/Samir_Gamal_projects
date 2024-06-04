<?php

use App\Http\Controllers\innvokableController;
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

Route::get('test',[PostController::class,'test']); // عادى Route 

Route::get('parameter/{id}',[PostController::class,'parameter']);  // Route with parameter 
//_______________________________________________________________________________________________________________
                                    // Route Controller 

//اللى فيه  function واحد ويتعامل مع كل ال controller بيدخل على  Route عبارة عن  Route Controller ال 

Route::controller(PostController::class)->group(function(){ // controller دا ال 
    Route::get('post','showUser');   //اللى هتتنفذ Controller اللى جوا ال Function مع ال Route ودى ال 
    Route::get('delete','deleteUser');  //اللى هتتنفذ Controller اللى جوا ال Function مع ال Route ودى ال 
});

//_______________________________________________________________________________________________________________
                                            // *12* Route Resource

Route::resource('users',UserController::class); 

/* url لما بكتب ف 

(/user) =>  ( UserController من ال index ال  function هيجبلى ) ->get دا من نوع  Route ال 
(user/create) =>  ( UserController من ال create ال  function هيجبلى ) ->get دا من نوع  Route ال 
(user/store) =>  ( UserController من ال store ال  function هيجبلى )->Post دا من نوع  Route ال 
(user/show) =>  ( UserController من ال show ال  function هيجبلى )->get دا من نوع  Route ال 
(user/{id}/edit) =>  ( UserController من ال show ال  function هيجبلى )->get دا من نوع  Route ال 
(user/update) =>  ( UserController من ال update ال  function هيجبلى )->Post دا من نوع  Route ال 
(user/delete) =>  ( UserController من ال delete ال  function هيجبلى )->get دا من نوع  Route ال 

*/
//_______________________________________________________________________________________________________________
                                           //  *14* * invoke Controller *     
//  __invoke واحده اسمها method ليه controller بيعمل  invoke controller ال    
// php artisan make:controller innvokableController -i      innvoke ال  controller دا الامر اللى من خلاله بعمل بيه 

Route::get('user_profile',innvokableController::class);  // Controller ودا طريقة كتابة ال   

