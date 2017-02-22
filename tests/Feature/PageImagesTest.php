<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Page;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

class PageImagesTest extends TestCase
{

//    use DatabaseTransactions;

    /**
     * @return array
     */
    public function testLoadImageMethod()
    {
        $page = Page::create(['url' => 'test-page']);
        $child1 = Page::create(['url' => 'child-1']);
        $child1->makeChildOf($page);
        $child2 = Page::create(['url' => 'child-2']);
        $child2->makeChildOf($child1);
        $pathTo = $child2->loadImage('database/seeds/images/ikmed-logo-big.jpg', [
            'alt_ru' => 'alt RU',
            'alt_en' => 'alt EN',
            'sort_order_id' => 0,
        ]);
        $this->assertTrue(Storage::disk('base')->exists($pathTo));
        return [$child1, $pathTo];
    }

    /**
     * @depends testLoadImageMethod
     * @param $data
     * @return array
     */
    public function testRenameFolderWhenRenamePageUrl($data)
    {
        $pageForRenaming = $data[0];
        $pageForRenaming->url = 'renamed-child-1';
        $pageForRenaming->save();

        $this->assertFalse(Storage::disk('base')->exists('public/images/test-page/child-1'));
        $this->assertTrue(Storage::disk('base')->exists('public/images/test-page/renamed-child-1'));

        return [$pageForRenaming, $data[1]];

    }

    /**
     * @depends testRenameFolderWhenRenamePageUrl
     * @param $data
     */
    public function testDeleteChildrenAndImagesWhenPageDeleted($data)
    {
        $pageForDeleting = $data[0];

        $pageForDeleting->getDescendantsAndSelf();
        $pageForDeleting->delete();

        $this->assertFalse(Storage::disk('base')->exists('public/images/test-page/renamed-child-1'));

        $pathTo = $data[1];
        $dirs = explode('/', $pathTo, 4);
        array_pop($dirs);
        $pathForRemove = implode('/', $dirs);

        Storage::disk('base')->deleteDirectory($pathForRemove);
        Storage::disk('base')->Delete($pathTo);

        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');

    }
}
