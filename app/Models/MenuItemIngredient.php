<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItemIngredient extends Model
{
    protected $fillable = [
        'menu_item_id',
        'inventory_item_id',
        'quantity',
        'unit_id',
    ];

    protected $casts = [
        'quantity' => 'decimal:2',
    ];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }

    public function inventoryItem()
    {
        return $this->belongsTo(InventoryItem::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
