<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience_levels extends Model
{
    use HasFactory;
    protected $fillable = [
        'level_name',
        'description',

    ];
    public function jobs(){
        return $this->hasMany(Jobs::class);
}

}
