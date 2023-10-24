<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'status',
        'location',
        'description',

    ];
    public function Product()
    {
        return $this->hasMany(Product::class);

    }



}
