<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfolio_categories';

    public function portfolio_works()
    {
        return $this->hasMany('App\PortfolioWork', 'category_id', 'id');
    }
}
