<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class KitchenEquipment extends Model
{
    use HasFactory;

    // add fillable
    protected $fillable = [
        'name',
        'equipment_type',
        'total_quantity',
        'available_quantity',
        'in_use_quantity',
        'damaged_quantity',
        'min_quantity',
        'status',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
