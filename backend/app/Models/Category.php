<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
    ];
    public function goods()
    {
        return $this->belongsToMany(Good::class,'good_categories','category_id','good_id');

    }
}
