<?php

use Database\Seeders\UserSeeder;
use Database\Seeders\TopicSeeder;
use Database\Seeders\ChoiceSeeder;
use Database\Seeders\LessonSeeder;
use Database\Seeders\QuestionSeeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $userSeed = new UserSeeder();
        $userSeed->run();

        $topicSeed = new TopicSeeder();
        $topicSeed->run();

        $lessonSeed = new LessonSeeder();
        $lessonSeed->run();

        $questionSeed = new QuestionSeeder();
        $questionSeed->run();

        $choiceSeed = new ChoiceSeeder();
        $choiceSeed->run();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
