<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    protected $fillable = [
        'daily_menu_id',
        'name',
        'description',
        'calories',
        'protein',
        'carbs',
        'fat',
    ];

    protected $casts = [
        'calories' => 'decimal:2',
        'protein'  => 'decimal:2',
        'carbs'    => 'decimal:2',
        'fat'      => 'decimal:2',
    ];

    public function dailyMenu():BelongsTo
    {
        return $this->belongsTo(DailyMenu::class);
    }
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
