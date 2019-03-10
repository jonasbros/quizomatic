<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultsComment extends Model
{
    // RELATIONSHIPS
    public function user() {
        $this->belongsTo(User::class);
    }
    
    public function result() {
        $this->belongsTo(Results::class);
    }
    //likes
    public function likes() {
        $this->hasMany(ResultsCommentLike::class);
    }
}
