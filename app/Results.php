<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    // Relationsihps
    public function user() {
        $this->belongsTo(User::class);
    }
    
    public function quiz() {
        $this->belongsTo(Quiz::class);
    }
    //likes
    public function likes() {
        $this->hasMany(ResultsLike::class);
    }
} 
