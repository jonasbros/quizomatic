<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    // RELATIONSHIPS
    public function user(){
        return $this->belongsTo(User::class);
    }
    // questions
    public function questions() {
        return $this->hasMany(Question::class);
    }
    // likes
    public function likes() {
        return $this->hasMany(QuizLike::class);
    }
    // comments
    public function comments() {
        return $this->hasMany(QuizComment::class);
    }
     // categories
     public function category() {
        return $this->belongsTo(Category::class);
    }
}
