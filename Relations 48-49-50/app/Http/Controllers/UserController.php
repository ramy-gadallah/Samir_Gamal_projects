<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
        ///////////////////////////// method of one to one Relation ///////////////////////////////////////
    public function phone(){
        $user=User::find(1); // 1 = id هنا بقولو روحلى جدول اليوزر وهاتلى ال 
        return $user->phone;  //phoness اللى هوا ال function وهاتلى منه ال  User modelهنا بقولو هات 
    } 

    public function user(){
        $phone=Phone::find(2);
        return $phone->user;
    }


            ///////////////////////////// method of many to many Relation ///////////////////////////////////////
                        // Roles وعاوز ال  User هنا انا عندى ال 
    public function get_roles(){
        $get_user=User::find(1);
        return $get_user->roles;
    }

                            // User وعاوز ال  Role هنا انا عندى ال 
    public function get_user(){
        $get_user=Role::find(2);
        return $get_user->name ;
    }

}
