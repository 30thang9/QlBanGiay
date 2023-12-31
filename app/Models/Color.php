<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function productDetailColors(): HasMany
    {
        return $this->hasMany(Product::class,'color_id','id');
    }
}