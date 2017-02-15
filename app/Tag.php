<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function portfolio_works()
    {
        return $this->morphedByMany('App\PortfolioWork', 'taggable');
    }
}
