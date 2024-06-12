<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function available_products()
    {
        return $this->hasMany(AvailableProduct::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
