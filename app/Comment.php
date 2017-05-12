<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
