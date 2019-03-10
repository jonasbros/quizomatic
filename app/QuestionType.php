<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    // RELATIONSHIPS
    public function question() {
        return $this->hasMany(Question::class);
    }
}
