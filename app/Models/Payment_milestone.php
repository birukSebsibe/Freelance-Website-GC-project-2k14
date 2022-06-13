<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_milestone extends Model
{
    use HasFactory;
    protected $fillable = [
         'proposal_id',
        'milestone_description',
        'amount',
        'due_date',
    ];
    public function proposal(){
        return $this->belongsTo(Proposal::class, 'proposal_id');
    }

}
