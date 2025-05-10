<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    //

    // add fillable
    protected $fillable = ['name','symbol'];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function inventoryItems():HasMany
    {
        return $this->hasMany(InventoryItem::class);
    }

    public function menuItemIngredients():HasMany
    {
        return $this->hasMany(MenuItemIngredient::class);
    }

    public function purchaseRequestItems()
    {
        return $this->hasMany(PurchaseRequestItem::class);
    }

    public function purchaseOrderItems()
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    // public function stockRequestItems()
    // {
    //     return $this->hasMany(StockRequestItem::class);
    // }
}
