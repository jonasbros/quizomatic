<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    // Relationships
    // categories
    public function question() {
        $this->belongsTo(Question::class);
    }
}
