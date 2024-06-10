<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function get_users(){
        return $this->belongsToMany(User::class,'rule_user_pivot');        
    }
}
