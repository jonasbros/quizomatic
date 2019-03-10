<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultCommentLike extends Model
{
    // Relationships
    public function user() {
        $this->belongsTo(User::class);
    }
    
    public function result_comment() {
        $this->belongsTo(ResultsComment::class);
    }
}
