<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'feed_back',
        'created_at',
        'updated_at',




    ];
    public function user(){
        return $this->belongsTo(User::class , 'users_id');
    }
}
