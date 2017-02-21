<?php

namespace App;

use Baum\Node;
use Illuminate\Support\Facades\Storage;

/**
 * Page
 */
class Page extends Node
{

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'pages';

    public function page_type()
    {
        return $this->belongsTo('App\PageType', 'type_id', 'id');
    }

    public function images()
    {
        return $this->morphToMany('App\Image', 'imageable');
    }

    public function loadImage($source, $imageData = [])
    {
        $path = 'images/';
        foreach ($this->getAncestorsAndSelf() as $item) {
            $path .= $item->url . '/';
        }
        $ext = pathinfo($source, PATHINFO_EXTENSION);
        $name = basename($source, '.' . $ext);
        $imageData = array_merge(
            $imageData,
            [
                'path' => $path,
                'name' => $name,
                'ext' => $ext,
            ]
        );
        $image = Image::create($imageData);
        $this->images()->save($image);
        $pathTo = 'public/' . $path . $name . '.' . $ext;
        $isHttp = preg_match('#^https?://#i', $source);
        $sourceSize = Storage::disk('base')->getSize($source);
        if (!$isHttp) {
            $exists = Storage::disk('base')->has($pathTo);
            if ($exists) {
                if ($sourceSize != Storage::disk('base')->getSize($pathTo)) {
                    Storage::disk('base')->Delete($pathTo);
                    Storage::disk('base')->copy($source, $pathTo);
                }
            } else {
                Storage::disk('base')->copy($source, $pathTo);
            }
        }
        return $pathTo;
    }

    public function save(array $options = array())
    {
        $changed = $this->isDirty('url') ? $this->getDirty() : false;
        $original = $this->getOriginal();
        parent::save();
        if ($changed && array_key_exists('url', $original)) {
            $pageObject = $this;
            $oldPath = 'public/images/';
            $newPath = 'public/images/';
            foreach ($pageObject->getAncestorsAndSelf() as $item) {
                if($item->url != $changed['url']){
                    $oldPath .= $item->url . '/';
                }else{
                    $oldPath .= $original['url'] . '/';
                }
                $newPath .= $item->url . '/';
            }
            Storage::disk('base')->move($oldPath, $newPath);
        }
    }

    public function delete(array $options = array())
    {
        $path = 'public/images/';
        foreach ($this->getAncestorsAndSelf() as $item) {
            $path .= $item->url . '/';
        }
        Storage::disk('base')->deleteDirectory($path);
        parent::delete();
    }

//    protected static function boot()
//    {
//
//        Page::updating(function ($page) {
//            $original = $page->getOriginal();
//            if (array_key_exists('url', $original)) {
//                echo ">>\r";
//                var_dump('old: ' .$original['url']);
//                var_dump('new: ' .$page->url);
//                echo "<<\r";
//            }
//
////            var_dump($page->getOriginal());
//
////            if($page->isDirty('url')) {
////                var_dump($page->isDirty('url'));
////                var_dump('new: ' . $page->url);
////            }
//
//        });
//
////        static::saving(function ($page) {
////            $original = $page->getOriginal();
////            var_dump($original["url"]);
//////            if ($page->url != $original['url']) {
//////                var_dump($original['url']);
//////                var_dump($page->url);
//////            }
////        });
////
////        static::deleting(function ($model) {
////            var_dump('---deleting---');
////        });
//
//        parent::boot();
//    }



    //////////////////////////////////////////////////////////////////////////////

    //
    // Below come the default values for Baum's own Nested Set implementation
    // column names.
    //
    // You may uncomment and modify the following fields at your own will, provided
    // they match *exactly* those provided in the migration.
    //
    // If you don't plan on modifying any of these you can safely remove them.
    //

    // /**
    //  * Column name which stores reference to parent's node.
    //  *
    //  * @var string
    //  */
    // protected $parentColumn = 'parent_id';

    // /**
    //  * Column name for the left index.
    //  *
    //  * @var string
    //  */
    // protected $leftColumn = 'lft';

    // /**
    //  * Column name for the right index.
    //  *
    //  * @var string
    //  */
    // protected $rightColumn = 'rgt';

    // /**
    //  * Column name for the depth field.
    //  *
    //  * @var string
    //  */
    // protected $depthColumn = 'depth';

    // /**
    //  * Column to perform the default sorting
    //  *
    //  * @var string
    //  */
    // protected $orderColumn = null;

    // /**
    // * With Baum, all NestedSet-related fields are guarded from mass-assignment
    // * by default.
    // *
    // * @var array
    // */
    // protected $guarded = array('id', 'parent_id', 'lft', 'rgt', 'depth');

    //
    // This is to support "scoping" which may allow to have multiple nested
    // set trees in the same database table.
    //
    // You should provide here the column names which should restrict Nested
    // Set queries. f.ex: company_id, etc.
    //

    // /**
    //  * Columns which restrict what we consider our Nested Set list
    //  *
    //  * @var array
    //  */
    // protected $scoped = array();

    //////////////////////////////////////////////////////////////////////////////

    //
    // Baum makes available two model events to application developers:
    //
    // 1. `moving`: fired *before* the a node movement operation is performed.
    //
    // 2. `moved`: fired *after* a node movement operation has been performed.
    //
    // In the same way as Eloquent's model events, returning false from the
    // `moving` event handler will halt the operation.
    //
    // Please refer the Laravel documentation for further instructions on how
    // to hook your own callbacks/observers into this events:
    // http://laravel.com/docs/5.0/eloquent#model-events

}
