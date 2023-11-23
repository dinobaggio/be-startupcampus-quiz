<?php

namespace App\Models;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    public function choices(): HasMany
    {
        return $this->hasMany(Choice::class);
    }

    public function lesson(): BelonsTo
    {
        return $this->belongsTo(Lesson::class);
    }
}
