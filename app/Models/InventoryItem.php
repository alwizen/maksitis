<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventoryItem extends Model
{
    use HasFactory;

    // add fillable
    protected $fillable = [
        'name',
        'category_id',
        'unit_id',
        'stock_quantity',
        'min_stock_level',
        // 'description', // aktifkan jika nanti ditambahkan di migration
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'stock_quantity' => 'decimal:2',
        'min_stock_level' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function menuItemIngredients()
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

    // public function stockAdjustments()
    // {
    //     return $this->hasMany(StockAdjustment::class);
    // }
}