<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'user_full_name',
        'quantity',
        'description',
    ];
    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class);
    }
}
