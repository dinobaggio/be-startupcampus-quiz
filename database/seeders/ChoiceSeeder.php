<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('choices')->insert([
            [
                'id' => 1,
                'question_id' => 1,
                'content' => 'first',
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'question_id' => 1,
                'content' => 'init',
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'question_id' => 1,
                'content' => 'main',
                'correct' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'question_id' => 2,
                'content' => 'fmt',
                'correct' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'question_id' => 2,
                'content' => 'strconv',
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'question_id' => 2,
                'content' => "net/http",
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'question_id' => 3,
                'content' => \html_entity_decode("variable =: value"),
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'question_id' => 3,
                'content' => \html_entity_decode("variable := value"),
                'correct' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'question_id' => 3,
                'content' => \html_entity_decode("var variable string = value"),
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'question_id' => 4,
                'content' => \html_entity_decode("if (condition === true)"),
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 11,
                'question_id' => 4,
                'content' => \html_entity_decode("if condition == true :"),
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 12,
                'question_id' => 4,
                'content' => \html_entity_decode("if condition == true { }"),
                'correct' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 13,
                'question_id' => 5,
                'content' => \html_entity_decode("for i, value := range values { }"),
                'correct' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 14,
                'question_id' => 5,
                'content' => \html_entity_decode("values.forEach(item => item)"),
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 15,
                'question_id' => 5,
                'content' => \html_entity_decode("for (i = 0;i < length; i++) {}"),
                'correct' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
        
    }
}
