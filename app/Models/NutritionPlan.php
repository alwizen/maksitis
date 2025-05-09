<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NutritionPlan extends Model
{
    protected $fillable = [
        'date',
        'calories',
        'protein',
        'carbs',
        'fat',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'date' => 'date',
        'calories' => 'decimal:2',
        'protein' => 'decimal:2',
        'carbs'   => 'decimal:2',
        'fat'     => 'decimal:2',
    ];

    public function creator():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
