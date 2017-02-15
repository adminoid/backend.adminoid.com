<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App;

class RelationshipsTest extends TestCase
{

    use DatabaseTransactions;

//    /**
//     * A basic test example.
//     *
//     * @return void
//     */
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }

    public function testPageAndPageTypeRelation()
    {
        $pageType = factory(App\PageType::class)->create();
        $pages = factory(App\Page::class, 3)->create();
        $pageType->pages()->saveMany($pages);
        $pageType->pages()->get()->each(function ($page) {
            $this->assertTrue(strlen($page->title) > 0 && gettype($page) == 'object');
            $pageTypeMustBeOne = $page->page_type()->get()->count();
            $this->assertTrue($pageTypeMustBeOne == 1);
        });
    }

    public function testPagesImagesRelation()
    {
        $pages = factory(App\Page::class, 3)->create();
        $images = factory(App\Image::class, 2)->create();
        $pages->each(function ($page) use ($images) {
            $page->images()->saveMany($images);
            $this->assertEquals($page->images()->count(), 2);
        });
    }

    public function testImagesPagesRelation()
    {
        $images = factory(App\Image::class, 2)->create();
        $pages = factory(App\Page::class, 3)->create();
        $images->each(function ($image) use ($pages) {
            $image->pages()->saveMany($pages);
            $this->assertEquals($image->pages()->count(), 3);
        });
    }
}
