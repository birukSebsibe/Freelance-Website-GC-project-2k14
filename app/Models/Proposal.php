<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
        'freelancer_id',
        'cover_letter',
        'payment_type',
        'personalized_profile',
        'proposal_status',
        'created_at',
        'updated_at',

    ];

    public function jobs(){
        return $this->belongsTo(Jobs::class, 'id');
    }
    public function freelancer(){
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }
    public function personalized_profile(){
        return $this->belongsTo(Personalized_profile::class);
    }
    public function proposal_statuses(){
        return $this->belongsTo(Proposal_statuses::class ,'proposal_status' );
    }
    public function payment_milestones(){
        return $this->hasMany(Proposal::class);
}
}
