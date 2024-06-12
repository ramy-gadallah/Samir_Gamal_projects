<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // استخدام ده عشان امسح مسح واسيب الداتا فى الداتا بيز

        // php artisan make:migration create_posts_table ->جديد فى الداتا بيز table دى بتعمل 
    // php artisan make:model Post -> جديد ولازم يبقى اول حرف كابتل ومفرد model دى بتعمل 
    // php artisan make:model Post (-m or --migration) ->  migration + model دى بتعمل 
    // php artisan make:model Offer -mc -> controller + migration + model دى بتعمل  
    // php artisan make:model Offer -mcr -> controller with resource routes + migration + model دى بتعمل 
    
    protected $table = 'posts'; // اللى فى الداتا بيز table دا اسم ال 

    public $timestamps=true; //false فى الجدول تظهر دى تبقى  timestamps فى حالة انى مش عاوز ال 

    // protected $primaryKey = 'name';  // اللى فى الداتا بيز  columns لل primary_key دا لو عاوز اغير ال 

    // public $incrementing = false; // انا ب ايدى  id واعمل ال  autoincrement مثلا مخلهوش  id ودا لو عاوز اغير ال 

    protected $fillable=['id','title','body','created_at','updated_at']; // دى افضل من اللى تحتها

    // protected $guarded=[]; // protected $fillable=['id','title','body','created_at','updated_at']; دا بدل م اعمل ال 

    public function scopeRamy($query){ //controller واستدعيها ف ال  query هنا بعمل ال 
        return $query->where('title','3')->get();
    }

    public function scopeHazem($query){
        return $query->get();
    }
}
