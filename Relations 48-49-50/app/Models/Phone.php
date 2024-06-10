<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['code','phone','user_id'];


public function user(){
    return $this->belongsTo(User::class)->select('name');
}

}
