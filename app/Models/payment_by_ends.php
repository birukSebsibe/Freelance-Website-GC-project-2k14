<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_by_ends extends Model
{
    use HasFactory;
    protected $fillable = [

        'amount',
        'proposal_id',
        'created_at',
        'updated_at',
       ];
       public function proposal(){
        return $this->belongsTo(Proposal::class, 'proposal_id');
    }

}
