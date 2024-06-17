<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function __construct()
    // {                                  // middleware for controller
    //     $this->middleware(['auth']);
    // }  

    public function index(){
        return 'posts';
    }

   public function test(){
    return 'test done';
   }
}
