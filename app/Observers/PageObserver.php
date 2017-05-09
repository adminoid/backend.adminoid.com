<?php

namespace App\Observers;

use App\Page;

class PageObserver
{

    public function saving(Page $model)
    {
        if ($model->isDirty('slug', 'parent_id')) {
            $original = $model->getOriginal();
            $model->generateUri($original);
        }
    }

    public function saved(Page $model)
    {
        // Данная переменная нужна для того, чтобы потомки не начали вызывать
        // метод, т.к. для них путь также изменится
        static $updating = false;
        if (!$updating && $model->isDirty('uri')) {
            $updating = true;
            $model->updateDescendantsUri();
            $updating = false;
        }
    }

}