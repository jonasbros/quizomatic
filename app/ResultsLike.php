<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultsLike extends Model
{
    // Relationships
    public function user() {
        $this->belongsTo(User::class);
    }

    public function result() {
        $this->belongsTo(Results::class);
    }
}
