<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillabel =[
        'user_id',
        'title',
        'description'
    ];

    public function user(){
        return $this->belongsTo(\App\Models\User::class,'user_id');
    }
}
