<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function photoVariations()
    {
        return $this->belongsToMany(PhotoVariation::class, 'cart_photo');
    }
}
