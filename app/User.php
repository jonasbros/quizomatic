<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // RELATIONSHIPS
    public function quizzes() {
        return $this->hasMany(Quiz::class);
    }

    //comments relationship
    public function quiz_comments() {
        return $this->hasMany(QuizComment::class);
    }

    public function result_comments() {
        return $this->hasMany(ResultsComment::class);
    }
    //likes relationship
    public function results_like() {
        return $this->hasMany(ResultsLike::class);
    }

    public function quiz_like() {
        return $this->hasMany(QuizLike::class);
    }

    public function comment_like() {
        return $this->hasMany(CommentLike::class);
    }

    public function result_comment_like() {
        return $this->hasMany(ResultCommentLike::class);
    }
}
