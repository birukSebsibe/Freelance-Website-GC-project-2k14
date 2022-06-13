<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'poster_id',
        'title',
        'description',
        'job_status_id',
        'budget',
        'created_at',
        'updated_at',
        'sub_category_id',
        'freelancer_needed',
        'responsibility',
        'qualities',
        'experience',




    ];
    public function job_statuses(){
        return $this->belongsTo(Job_statuses::class, 'job_status_id');
    }
    public function experience_levels(){
        return $this->belongsTo(Experience_levels::class, 'experience');
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function poster(){
        return $this->belongsTo(User::class,'poster_id');
    }

}
