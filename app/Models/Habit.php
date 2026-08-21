<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    use HasFactory;    

    protected $fillable = [
        'user_id',
        'name'
    ];

    //um hábito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //um habito pode ter muitos registros
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }

    public function wasCompletedToday(): bool
    {
        return $this->habitLogs
            ->where('completed_at', Carbon::today()->toDateString())
            ->isNotEmpty();
    }

    public function wasCompletedOn(Carbon $date): bool
    {
        return $this->habitLogs
            ->where('completed_at', $date->toDateString())
            ->isNotEmpty();
    }

    /**
     * @param int $year
     * @return array
     */

    public static function generateYearGrid(int $year): array
    {
        $startDate = \Carbon\Carbon::create($year, 1, 1); // 01/01/YYYY
        $endDate = \Carbon\Carbon::create($year, 12, 31); // 31/12/YYYY

        $weeks = [];
        $currentWeek = [];

        $firstDayOfWeek = $startDate->dayOfWeek; // 0 = domingo, 1 = segunda, etc
        for ($i = 0; $i < $firstDayOfWeek; $i++) {
            $currentWeek[] = null; // Placeholder vazio
        }
    

        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $currentWeek[] = $date->copy();

            // Fecha a semana no sábado ou no último dia
            if ($date->isSaturday() || $date->eq($endDate)) {
            $weeks[] = $currentWeek;
            $currentWeek = [];
            }
        }

        return $weeks;
    }
}
