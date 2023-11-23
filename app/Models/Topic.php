<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\UserLesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function userLesson(): HasMany
    {
        return $this->hasMany(UserLesson::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class)->limit(1)->orderBy('id', 'ASC');
    }
}
