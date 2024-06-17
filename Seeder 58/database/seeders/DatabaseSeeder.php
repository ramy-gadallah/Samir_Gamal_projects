<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        $this->call([
                
            //php artisan db:sead اللى عندى وبعملهم  seaders هنا بحط كل ال 
            //لوحده seader مره واحده بدل م اعمل كل  seaders بعمل لكل ال 
            UserSeeder::class,
            // PostSeader::class,
            // TestSeader::class,
            // array عندى بيتحطو جوا هنا فى  seaders ال 

                               // *ملحوظة*
            //ف لازم اخلى الجدول اللى فيه العلاقات فى الاخر خالص  sead وعندى جدول بعملو  php artisan db:sead  لما اجى 
 
        ]);

    }
}
