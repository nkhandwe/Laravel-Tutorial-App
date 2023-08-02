<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
      public function category()
      {
      return $this->belongsTo(Category::class, 'category_id');
      }
      public function topic()
      {
      return $this->hasMany(Topic::class, 'subcategory_id');
      }
       public function posts()
       {
       return $this->hasMany(Posts::class);
       }
}
