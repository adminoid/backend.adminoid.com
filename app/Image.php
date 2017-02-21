<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['path', 'name', 'ext', 'alt_ru', 'alt_en', 'sort_order_id'];

//    public function __construct($imageForUploading = null, array $attributes = array())
//    {
//        // Place for code
//        parent::__construct($attributes);
//    }

    public function pages()
    {
        return $this->morphedByMany('App\Page', 'imageable');
    }

    public function portfolio_works()
    {
        return $this->morphedByMany('App\PortfolioWork', 'imageable');
    }
}
