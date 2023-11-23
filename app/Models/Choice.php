<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Choice extends Model
{
    use HasFactory;

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}