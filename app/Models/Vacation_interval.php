<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation_interval extends Model
{
    use HasFactory;

    protected $fillable =[
        'vacation_id',
        'interval',
        'start',
        'end'
    ];

    public function vacation(){
        return $this->belongsTo(Vacation::class);
    }
}
