<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Relationships
    // quiz
    public function quiz() {
        $this->hasMany(Quiz::class);
    }
}
