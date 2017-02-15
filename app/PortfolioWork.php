<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioWork extends Model
{
    public function images()
    {
        return $this->morphToMany('App\Image', 'imageable');
    }
}
