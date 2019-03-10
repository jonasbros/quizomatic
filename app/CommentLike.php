<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    // Relationships
    public function user() {
        $this->belongsTo(User::class);
    }
    
    public function comment() {
        $this->belongsTo(Comment::class);
    }
}
