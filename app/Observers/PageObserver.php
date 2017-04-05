<?php

namespace App\Observers;

use App\Page;

class PageObserver
{
    /**
     * saving = creating and updating
     * @param Page $page
     */
    public function saving(Page $page)
    {
        // Detect if alias changed
        $original = $page->getOriginal();
        $originalAlias = (isset($original['alias'])) ? (string) $original['alias'] : '';
        $originalParentId = (isset($original['parent_id'])) ? (string) $original['parent_id'] : '';
        // if alias has changed
        if ($page->alias != $originalAlias || $page->parent_id != $originalParentId){
            $uri = '';
            if (!$page->isRoot()) {
                $ancestors = Page::find($page->getParentId())->getAncestorsAndSelf();
                foreach ($ancestors as $ancestor) {
                    $uri .= $ancestor->alias . '/';
                }
            }
            else {
                if (in_array($page->alias, ['css', 'js', 'static'])) {
                    abort(422, 'alias equal to reserved folder, rename it!');
                }
            }
            $uri .= $page->alias . '/';
            $page->uri = $uri;
        }
    }

    public function moved(Page $page)
    {
        $uri = '';
        foreach ($page->getAncestorsAndSelf() as $item) {
            $uri .= $item->alias . '/';
        }
        $page->uri = $uri;
        $page->save();
    }
}