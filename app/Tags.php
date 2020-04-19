<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Posts::class, 'posts_tags');
    }
}
