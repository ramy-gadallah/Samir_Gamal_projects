<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    // public function __construct(){
    //     return 'welcome on postController '.'<br>';
    // }
   

    public function test(){
        return 'test';
    }
    public function showUser(){
        return 'done route controller ShowUser';
    }

    public function deleteUser(){
        return 'done route controller deleteUser';

    }

    public function parameter(){
        return 'route with parameter';
    }
    
}
