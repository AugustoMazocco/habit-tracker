<?php

namespace Database\Seeders;

use App\Models\Habit;
use App\Models\HabitLog;
use Illuminate\Database\Seeder;

class HabitLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $habits = Habit::all();

        foreach ($habits as $habit) {
            for ($i = 0; $i < 10; $i++) {
                HabitLog::factory()->create([
                    'habit_id' => $habit->id,
                    'user_id' => $habit->user_id,
                    'completed_at' => now()->subDays($i)->toDateString(),
                ]);
            }
        }
    }
}
