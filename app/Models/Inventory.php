<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'InventoryName',
        'InventoryDescription',
        'InventoryLocation',
        'InventoryArchiveDate',
        'InventoryCategory',
        'InventorySupplier',


   ];
    public function contract()
    {
        return $this->hasOne(Contract::class, 'inventory_id');
    }
}