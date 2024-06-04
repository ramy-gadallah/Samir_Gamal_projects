<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->default('empty');

                                    // *foreign key الطريقة الاولى *
            //  posts وجدول ال users وهوا انى عندى جدولين جدول ال  foreign keyهنا هعمل ال 
            //  posts اجيبو فى جدول ال  users من جدول ال  columns انى استدعى  foreign keyال 

            $table->unsignedBigInteger('user_id'); //عادى posts فى جدول ال  'user_id' جديد اسمو  column هنا بعرف 
            $table->foreign('user_id')->references('id')->on('users'); // foreign key هنا بقا بعمل ال 
            
            /* 
              $table->foreign('user_id')->references('id')->on('users');
             $table-> 'static'
             foreign('user_id')->'foreign key اللى هعمل عليه ال  column دا ال '
             references('id')-> 'users اللى هيجى من جدول التانى بتاع  column دا ال '
             on('users')-> ' id اللى فيه  table ودا ال ';
                      
            */
                                         // *foreign key الطريقة الثانية *

            // $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            /*  
            $table->static
            foreignId('user_id')-> id بس ب  foreign key هنا بقولو هعمل ال 
            constrained('users') ->id بقولو روح هات ال users من جدول ال 
            cascadeOnDelete()->ف امسح احمد والبوستين وكل حاجة متعلقة بيه  posts وكان عمل بوستين ف جدول ال  users دى معناها انى لو مسحت اليوزر دا احمد مثلا من جدول ال 
            */

            $table->string('body');
            $table->string('check');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
