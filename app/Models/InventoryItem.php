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

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function unit():BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}
