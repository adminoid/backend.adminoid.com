<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Page
 */
class Page extends Model
{

    use NodeTrait;

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'pages';

    public function pageable()
    {
        return $this->morphTo();
    }

    public function images()
    {
        return $this->morphToMany('App\Image', 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function generateUri()
    {
        $slug = $this->slug;
        $this->uri = $this->isRoot() ? $slug : $this->parent->uri . '/' . $slug;
        return $this;
    }

    public function updateDescendantsPaths()
    {
        // Получаем всех потомков в древовидном порядке
        $descendants = $this->descendants()->defaultOrder()->get();
        // Данный метод заполняет отношения parent и children
        $descendants->push($this)->linkNodes()->pop();
        foreach ($descendants as $model) {
            $model->generateUri()->save();
        }
    }

    public function loadImage($source, $imageData = [])
    {
        $path = 'images/';
        foreach ($this->getAncestors() as $item) {
            $path .= $item->slug . '/';
        }
        $path .= $this->slug . '/';
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
        } else {
            abort(422, 'TODO: make processing for external urls');
        }
        return $pathTo;
    }

//    public function save(array $options = array())
//    {
//        $changed = $this->isDirty('alias') ? $this->getDirty() : false;
//        $original = $this->getOriginal();
//        if ($changed && array_key_exists('alias', $original)) {
//            $pageObject = $this;
//            $oldPath = 'public/images/';
//            $newPath = 'public/images/';
//            foreach ($pageObject->getAncestorsAndSelf() as $item) {
//                if($item->alias != $changed['alias']){
//                    $oldPath .= $item->alias . '/';
//                }else{
//                    $oldPath .= $original['alias'] . '/';
//                }
//                $newPath .= $item->alias . '/';
//            }
//            Storage::disk('base')->move($oldPath, $newPath);
//        }
//        parent::save();
//    }

//    public function delete(array $options = array())
//    {
//        $path = 'public/images/';
//        foreach ($this->getAncestorsAndSelf() as $item) {
//            $path .= $item->alias . '/';
//        }
//        if (Storage::disk('base')->exists($path)) {
//            Storage::disk('base')->deleteDirectory($path);
//        }
//        parent::delete();
//    }





}
