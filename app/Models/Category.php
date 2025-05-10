<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //

    // add fillable
    protected $fillable = ['name'];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
    
    public function inventoryItems():HasMany
    {
        return $this->hasMany(InventoryItem::class);
    }
}
