<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $table = '_contract';
    protected $primaryKey = 'id';
    protected $fillable = [
        'contract_name',
        'contract_type',
        'contract_status',
        'contract_description',
        'contract_date',
        'user_id'
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}