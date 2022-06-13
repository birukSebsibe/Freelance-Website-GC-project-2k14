<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\LockableTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use LockableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'phone_number',
        'profile_pic',
        'country_id',

    ];

    public function complaints(){
        return $this->hasMany(Complaints::class);
}

    public function freelancer(){
        return $this->hasMany(Freelancer::class);
}
    public function client(){
        return $this->hasMany(Client::class);
}
    public function proposal(){
        return $this->hasMany(Proposal::class);
}
     public function jobs(){
        return $this->hasMany(Jobs::class);
}
public function feedback(){
    return $this->hasMany(Feedback::class);
}

public function notifications(){
    return $this->hasMany(Notifications::class);
}



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
}
