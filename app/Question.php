<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // RELATIONSHIPS
    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }
    // categories
    public function sub_category() {
        return $this->hasMany(SubCategory::class);
    }
    // type
    public function type() {
        return $this->belongsTo(QuestionType::class);
    }
}
