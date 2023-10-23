<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Request extends Model
{
    use HasFactory;
    protected $fillable = [
        'Created_at',
        'status',
        'latitude', // New variable for the marker's latitude
        'longitude', // New variable for the marker's longitude

    ];
    public function Offre()
    {
        return $this->belongsTo(Offre::class);

    }
}
