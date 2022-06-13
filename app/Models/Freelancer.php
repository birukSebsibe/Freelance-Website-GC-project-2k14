<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'sex',
        'user_id',
        'sex',
        'created_at',
        'updated_at',
        'verified',
        'earned_balance',




    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
