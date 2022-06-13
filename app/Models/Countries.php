<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;
    protected $fillable = [

        'country_name',

       ];

       public function freelancer(){
           return $this->hasMany(Freelancer::class);
       }
       public function client(){
        return $this->hasMany(Client::class);
    }
}
