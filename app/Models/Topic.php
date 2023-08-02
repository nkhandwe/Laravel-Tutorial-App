<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function subcategory()
    {
    return $this->belongsTo(SubCategory::class);
    }
    public function category()
    {
    return $this->belongsTo(Category::class);
    }
     public function posts()
     {
     return $this->hasMany(Posts::class);
     }
}
