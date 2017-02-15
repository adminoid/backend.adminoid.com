<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function images()
    {
        return $this->morphToMany('App\Image', 'imageable');
    }
}
