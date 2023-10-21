<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user',
        'type',
        'contact',
        'product_id'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
