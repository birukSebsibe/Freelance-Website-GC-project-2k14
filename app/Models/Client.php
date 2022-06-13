<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'country_id',
    ];

    public function country(){
        return $this->belongsTo(Countries::class,'id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function jobs(){
        return $this->hasMany(Jobs::class);
}

}
