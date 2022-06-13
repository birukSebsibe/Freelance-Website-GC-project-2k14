<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;
    protected $fillable = [
        'freelancer_id',
        'title',
        'overview',
        'sub_category_id',
        'experience',
        'created_at',
        'updated_at',

    ];

    public function freelancer(){
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }
    public function sub_catgory(){
        return $this->belongsTo(Subcatgory::class, 'sub_category_id');
    }

}
