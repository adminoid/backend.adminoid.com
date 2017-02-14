<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App;

class RelationshipsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
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
            $this->assertTrue(strlen($page->title) > 0 && gettype($page) == "object");
            $pageTypeMustBeOne = $page->page_type()->get()->count();
            $this->assertTrue($pageTypeMustBeOne == 1);
        });
    }
}
