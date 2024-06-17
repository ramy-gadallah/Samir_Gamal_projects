<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use GuzzleHttp\Promise\Create;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $i=0;
        $faker=Faker::create();

        for($i=0 ; $i<20 ; $i++){
            Post::create([
                'name'=>$faker->name,
                'title'=>$faker->city,
                'street'=>$faker->streetAddress(),
            ]);

        }

    }
}
