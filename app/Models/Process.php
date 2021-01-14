<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'creator',
        'work_order_number',
        'day',
        'date',
        'business_type',
        'agent_type',
        'agent_name',
        'project_name',
        'principal_name',
        'address',
        'telephone',
        'phone',
        'mail',
        'wasel_mail',
        'work_report',
        'attachments',
        'price',
        'complete_price',
        'half_price',
        'complete_half',
        'dept',
        'city',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function updates(){
        return $this->hasMany(Update::class);
    }
}
