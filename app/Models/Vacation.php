<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    use HasFactory;


    protected $fillable =[
        'user_id',
        'total',
        'taken',
        'last',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vacation_interval(){
        return $this->hasMany(Vacation_interval::class);
    }
}
