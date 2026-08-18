<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HabitLog extends Model
{
    protected $fillable = [
        'user_id',
        'habit_id',
        'completed_at'
    ];

    //um log pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo( related: User::class);
    }

    //um log pertence a um habito
    public function habit(): BelongsTo
    {
        return $this->belongsTo( related: Habit::class);
    }
}
