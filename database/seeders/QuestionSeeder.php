<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('questions')->insert([
            [
                'id' => 1,
                'lesson_id' => 1,
                'title' => 'Package apa yang pertama kali akan dieksekusi saat program dijalankan ?',
                'content' => 'Package apa yang pertama kali akan dieksekusi saat program dijalankan ?',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'lesson_id' => 1,
                'title' => 'Package apa yang berfungsi untuk I/O yang berhubungan dengan text ?',
                'content' => 'Package apa yang berfungsi untuk I/O yang berhubungan dengan text ?',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'lesson_id' => 1,
                'title' => 'Bagaimana deklarasi variable yang tipe data-nya ditentukan oleh tipe data nilainya.',
                'content' => 'Bagaimana deklarasi variable yang tipe data-nya ditentukan oleh tipe data nilainya.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'lesson_id' => 1,
                'title' => 'Bagaimana membuat kondisi pada golang ?',
                'content' => 'Bagaimana membuat kondisi pada golang ?',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'lesson_id' => 1,
                'title' => 'Bagaimana membuat perulangan pada golang ?',
                'content' => 'Bagaimana membuat perulangan pada golang ?',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
