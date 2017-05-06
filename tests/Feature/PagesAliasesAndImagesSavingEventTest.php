<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Page;

class PagesAliasesAndImagesSavingEventTest extends TestCase
{

    use DatabaseTransactions;

    public function testDuplicateExceptionOnCreatePageAsRoot()
    {
        $root1 = new Page(['slug' => 'root-test']);
        $root1->save();
        $this->expectExceptionMessage('slug equal to reserved folder, rename it!');
        Page::create(['slug' => 'root-test']);
    }

    public function testDuplicateExceptionOnCreatePageWithParentId()
    {
        $root = Page::create(['slug' => 'root-test-1']);
        $root->children()->create(['slug' => 'child-page']);
        // Protection against duplicate slugs
        $this->expectException('Illuminate\Database\QueryException');
        $root->children()->create(['slug' => 'child-page']);
    }

    public function testRenamingAliasForExistPage()
    {
        $root = Page::create(['slug' => 'root-test-updating']);
        $second = $root->children()->create(['slug' => 'second-slug']);
        $third = $second->children()->create(['slug' => 'third-slug']);
        $third1 = $second->children()->create(['slug' => 'third-slug-1']);
        $fourth = $third->children()->create(['slug' => 'fourth-slug']);

        $second->slug = 'second-slug-renamed';
        $second->save();

        $this->assertEquals(Page::find($third->id)->uri, 'root-test-updating/second-slug-renamed/third-slug');
        $this->assertEquals(Page::find($third1->id)->uri, 'root-test-updating/second-slug-renamed/third-slug-1');
        $this->assertEquals(Page::find($fourth->id)->uri, 'root-test-updating/second-slug-renamed/third-slug/fourth-slug');
    }

//    public function testLoadImageToPageAndRenameSlugForMovingImage()
//    {
//        $root = Page::create(['slug' => 'root-test-image']);
//        $child1 = Page::create(['slug' => 'child-page-image']);
//        $root->appendNode($child1);
//
//        $child2 = Page::create(['slug' => 'third-level-page']);
//        $child1->appendNode($child2);
//        $pathTo = $child2->loadImage('tests/images/ikmed-logo-big.jpg', [
//            'alt_ru' => 'alt RU',
//            'alt_en' => 'alt EN',
//            'sort_order_id' => 0,
//        ]);
//        echo $pathTo;
//    }

}
