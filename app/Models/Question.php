<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Question extends Model
{
    /**
     * Table's column list
     *
     * @var array
     */
    protected $fillable = ["user_id", "title", "slug", "body", "views", "answers", "votes", "best_answer_id"];

    /**
     * Create relation with user function
     * One question has one user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
