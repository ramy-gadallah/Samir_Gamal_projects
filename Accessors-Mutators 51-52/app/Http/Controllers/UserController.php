<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
public function index($id){
    $user =User::find($id);

    return $user->name;
}

public function store(){
    User::create([
        'name'=>'alis',
        'email'=>'alis@yahoo.com',
        'password'=>'1234562',
    ]);
    return 'done';
}

}
