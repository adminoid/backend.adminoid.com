<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioWork extends Model
{
    protected $table = 'portfolio_works';

    public function images()
    {
        return $this->morphToMany('App\Image', 'imageable');
    }

    public function review()
    {
        return $this->hasOne('App\Review', 'portfolio_work_id', 'id');
    }

    public function portfolio_category()
    {
        return $this->belongsTo('App\PortfolioWork', 'category_id', 'id');
    }
}
