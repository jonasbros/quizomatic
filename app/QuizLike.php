<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizLike extends Model
{
    // Relationships
    public function user() {
        $this->belongsTo(User::class);
    }
    
    public function quiz() {
        $this->belongsTo(Quiz::class);
    }
}
