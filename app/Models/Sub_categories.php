<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Sub_categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'description',

    ];

    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id');
    }


}
