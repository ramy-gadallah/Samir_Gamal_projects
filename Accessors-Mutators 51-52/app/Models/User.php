<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute ;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
                //دى بتتعمل لما يبقى الداتا جاية من الداتا بيز وابقى عاوز اتحكم ف شكلها يعنى تيجى كابتل سمول كده يعنى  function ال

    // protected function Name(): Attribute   // اللى فى الداتا بيز columns بس دا  اللى بيتغير ودا بيبقى اسم ال  Name ال 
    // {
    //     return Attribute::make(  // ال 
    //          get: fn ($value) => ucfirst($value),//  ودى بتخلى اول حرف كابتل من الكلمة الاولى فى الجملة columns دا الحاجة اللى انا بعملها ع ال  ucfirst ال 
    //     );
    // }

       protected function Name(): Attribute  
    {
        return Attribute::make(   // سواء بجيب داتا من الداتا بيز او بخزن داتا فى الداتا بيز  columns هنا بتحكم فى ال  
            
            get: fn ($value) => strtolower($value), // view عشان اجيب الداتا من الداتا بيز اعرضها فى ال  get هنا بستخدم ال 
            set: fn ($value) => strtoupper($value), // view عشان اخزن الداتا فى الداتا بيز من  ال  set هنا بستخدم ال 
        );
    }
}
