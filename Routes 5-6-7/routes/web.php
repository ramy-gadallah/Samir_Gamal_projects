<?php

use Illuminate\Http\Request;
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
Route::get('user',function(){  // basic route ودا لو عاوز اروح من مكان ل مكان 
    return view('welcome');
})->name('user.get');

Route::post('users',function(Request $request){ //  form لو انا رايح من مكان وعاوز ازور مكان لازم اكون جاى من 
            return $request->user_name;
})->name('users.post');

Route::get('parameter/{name}',function($name){ //route اللى ببعتو مع ال  parameter وال  route مع ال  parameter  هنا ببعت  
    return $name;                                 // function بيسمع مع ال url هوا اللى بيتبعت ف  function بيتحط مع 
});


