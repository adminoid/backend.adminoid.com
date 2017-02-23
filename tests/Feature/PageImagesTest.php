<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Page;
use Illuminate\Support\Facades\Storage;

class PageImagesTest extends TestCase
{

    use DatabaseTransactions;

    public function testRenameAndDeleteFolderWhenRenameAndDeletePageUrl()
    {

        $page = Page::create(['url' => 'test-page']);
        $child1 = Page::create(['url' => 'child-1']);
        $child1->makeChildOf($page);
        $child2 = Page::create(['url' => 'child-2']);
        $child2->makeChildOf($child1);
        $pathTo = $child2->loadImage('tests/images/ikmed-logo-big.jpg', [
            'alt_ru' => 'alt RU',
            'alt_en' => 'alt EN',
            'sort_order_id' => 0,
        ]);

        $pageForRenaming = $child1;
        $pageForRenaming->url = 'renamed-child-1';
        $pageForRenaming->save();

        $this->assertFalse(Storage::disk('base')->exists('public/images/test-page/child-1'));
        $this->assertTrue(Storage::disk('base')->exists('public/images/test-page/renamed-child-1'));

        $child1->getDescendantsAndSelf();
        $child1->delete();

        $this->assertFalse(Storage::disk('base')->exists('public/images/test-page/renamed-child-1'));

        $dirs = explode('/', $pathTo, 4);
        array_pop($dirs);
        $pathForRemove = implode('/', $dirs);

        Storage::disk('base')->deleteDirectory($pathForRemove);

    }

}
