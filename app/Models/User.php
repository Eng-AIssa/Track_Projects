<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
        'employee_id',
        'national_id',
        'gender',
        'region',
        'join_date',
        'contract_exp',
        'iqama_exp',
        'position',
        'phone',
        'email',
        'password',
        'basic',
        'housing',
        'transportation',
        'other',
        'total_salary',
        'iban',
        'bank',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function process(){

        return $this->hasMany(Process::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function updates(){
        return $this->hasMany(Update::class);
    }

    public function vacation(){
        return $this->hasOne(Vacation::class);
    }
}
