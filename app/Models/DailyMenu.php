<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DailyMenu extends Model
{
    protected $fillable = [
        'menu_date',
        'nutrition_plan_id',
        'description',
        'calories',
        'protein',
        'carbs',
        'fat',
        'created_by',
    ];

    protected $casts = [
        'menu_date' => 'date',
        'calories' => 'decimal:2',
        'protein'  => 'decimal:2',
        'carbs'    => 'decimal:2',
        'fat'      => 'decimal:2',
    ];

    public function nutritionPlan():BelongsTo
    {
        return $this->belongsTo(NutritionPlan::class);
    }

    public function creator():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
