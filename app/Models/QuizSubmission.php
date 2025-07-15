<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSubmission extends Model
{
    use HasFactory;
      protected $fillable = [
        'user_id',
        'question_id',
        'selected_option',
        'submitted_at',
        'time_taken',
        'is_correct',
    ];
}
