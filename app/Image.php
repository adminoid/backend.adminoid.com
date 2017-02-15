<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function pages()
    {
        return $this->morphedByMany('App\Page', 'imageable');
    }
}
