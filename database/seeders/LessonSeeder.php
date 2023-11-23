<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('lessons')->insert([
            [
                'id' => 1,
                'topic_id' => 1,
                'name' => 'Basic',
                'kkm' => 40,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
