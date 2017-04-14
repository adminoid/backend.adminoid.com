<?php

namespace App\Observers;

use App\Page;

class PageObserver
{
    public function creating(Page $page)
    {
        $uri = '';
        if ($page->isRoot()) {
            $uri = $page->alias . '/';
            $pagesWithSameAliasInSiblings = Page::roots()->where('alias', $page->alias);
            if ($pagesWithSameAliasInSiblings->count() > 0) {
                abort(422, 'alias equal to reserved folder, rename it!');
            }
        }
        else {
            $pageParent= Page::find($page->parent_id);
            $ancestorsUri = '';
            foreach ($pageParent->getAncestors() as $item) {
                $ancestorsUri .= $item->alias . '';
            }
            $descendantsUri = '';
            foreach ($pageParent->getDescendantsAndSelf() as $item) {
                $descendantsUri .= $item->alias . '/';
            }
            $uri = $ancestorsUri . $descendantsUri . $uri;
        }
        $page->uri = $uri;
    }

//    public function updating(Page $page)
//    {
//        $aliasOriginal = $page->getOriginal('alias');
//        if ($aliasOriginal != $page->alias) {
//            foreach (Page::find($page->id)->getDescendants() as $descendant) {
//                $uri = '';
//                foreach ($descendant->getAncestorsAndSelf() as $item) {
//                    if ($item->id == $page->id) {
//                        $uri .= $page->alias . '/';
//                    }
//                    else {
//                        $uri .= $item->alias . '/';
//                    }
//                }
//                $descendant->uri = $uri;
//                $descendant->save();
//            }
//        }
//    }

//    /**
//     * saving = creating and updating
//     * @param Page $page
//     */
//    public function saving(Page $page)
//    {
//        // Detect if alias changed
//        $original = $page->getOriginal();
//        $originalAlias = (isset($original['alias'])) ? (string) $original['alias'] : '';
//        $originalParentId = (isset($original['parent_id'])) ? (string) $original['parent_id'] : '';
//        // if alias has changed
//        if ($page->alias != $originalAlias || $page->parent_id != $originalParentId){
//            $uri = '';
//            if (!$page->isRoot()) {
//                $ancestors = Page::find($page->getParentId())->getAncestorsAndSelf();
//                foreach ($ancestors as $ancestor) {
//                    $uri .= $ancestor->alias . '/';
//                }
//            }
//            else {
//                if (in_array($page->alias, ['css', 'js', 'static'])) {
//                    abort(422, 'alias equal to reserved folder, rename it!');
//                }
//            }
//            $uri .= $page->alias . '/';
//            $page->uri = $uri;
//        }
//    }
//
//    public function moved(Page $page)
//    {
//        $uri = '';
//        foreach ($page->getAncestorsAndSelf() as $item) {
//            $uri .= $item->alias . '/';
//        }
//        $page->uri = $uri;
//        $page->save();
//    }
}