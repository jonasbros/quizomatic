<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizComment extends Model
{
    // Relationships
    public function user() {
        $this->belongsTo(User::class);
    }

    public function quiz() {
        $this->belongsTo(Quiz::class);
    }
    //likes
    public function likes() {
        $this->hasMany(QuizLike::class);
    }
}
