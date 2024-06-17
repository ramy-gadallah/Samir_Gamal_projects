<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 /*فى الداتا بيز وبيجبلى خطا كل اما اجى استخدم column->unique فى حالة عندى  truncate اقدر هنا استخدم ال 
           عشان بيكرر الداتا اللى انا مدخلها ف بيمسح الداتا ويرجع يضيفها تانى دا فى حالة الداتا المانوال نش الفيك sead ال */

           User::truncate();

        
        // php artisan make:seeder UserSeeder  جديد seeder دا عشان انشأ 
        // php artisan db:seed --class=UserSeeder   يسمع فى الداتا بيز  seeder دا عشان اللى عملتلو فى ال  

        // $i = 0;             // انشاء داتا فيك ف الداتا بيز كتير 
        // $faker=Faker::create();
        // for($i = 0; $i < 20; $i++){  
        //     User::create([
        //         'name'=>$faker->name,
        //         'email'=>$faker->safeEmail,
        //         'password'=>Hash::make('123324234234')
        //     ]);
        // }

        User::create([
            'name'=>'ramy',                    // انشاء داتا ف الداتا بيز مباشرة يوزر يوزر 
            'email'=>'ramyseeder@gmail.com',
            'password'=>'123456789'
        ]);
        User::create([
            'name'=>'amer',
            'email'=>'amer@gmail.com',
            'password'=>'223344556677'
        ]);

        User::create([
            'name'=>'muslim',
            'email'=>'muslim@gmail.com',
            'password'=>'21492348'
        ]);

    }
}
