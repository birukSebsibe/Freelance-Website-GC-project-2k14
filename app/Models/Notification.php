<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'created_at',
        'updated_at',
        'url',
        'titles',
        'viewed',

    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
