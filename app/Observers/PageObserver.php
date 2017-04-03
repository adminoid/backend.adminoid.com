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
        // if alias has changed
        if ($page->alias != $originalAlias){
            $pagesWithExistAlias = $page->getSiblingsAndSelf()->where('alias', $page->alias)->count();
            if ($pagesWithExistAlias > 0) {
                abort(422, 'alias already exist in siblings');
            }
            // generate full uri
            $uri = '';
            if (!$page->isRoot()) {
                $ancestors = Page::find($page->getParentId())->getAncestorsAndSelf();
                foreach ($ancestors as $ancestor) {
                    $uri .= $ancestor->alias . '/';
                }
            }
            $uri .= $page->alias . '/';
            $page->uri = $uri;
        }
    }
}