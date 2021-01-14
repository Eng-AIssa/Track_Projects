<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $fillable =[
        'content',
        'user_id',
        'finished',
        'finishing_date',
    ];

    public function process(){
        return $this->belongsTo(Process::class);
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
