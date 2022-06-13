<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Durations extends Model
{
    use HasFactory;
    protected $fillable = [

        'duration_name',


       ];
       public function freelancer(){
            return $this->hasMany(Freelancer::class);
    }
    public function jobs(){
        return $this->hasMany(Jobs::class);
}
}
