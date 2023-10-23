<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    /**
     * Get the comments for the forum.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}