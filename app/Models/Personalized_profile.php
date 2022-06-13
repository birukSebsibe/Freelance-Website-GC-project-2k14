<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalized_profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'freelancer_id',
        'title',
        'hourly_rate',
        'overview',



    ];
}
