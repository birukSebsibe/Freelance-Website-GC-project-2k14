<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_statuses extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_name',
        'status_description',

    ];

    public function jobs(){
        return $this->hasMany(Jobs::class);
}
}
