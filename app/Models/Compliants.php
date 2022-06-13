<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compliants extends Model
{
    use HasFactory;
    protected $fillable = [
        'compliener_id',
        'complained_id',
        'reason',
        'created_at',
        'updated_at',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'compliener_id');
    }
}



