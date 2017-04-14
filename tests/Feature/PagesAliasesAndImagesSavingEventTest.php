<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Page;

class PagesAliasesAndImagesSavingEventTest extends TestCase
{

//    use DatabaseTransactions;

//    public function testDuplicateExceptionOnCreatePageAsRoot()
//    {
//        $root1 = new Page(['alias' => 'root-test']);
//        $root1->save();
//        $this->expectExceptionMessage('alias equal to reserved folder, rename it!');
//        Page::create(['alias' => 'root-test']);
//    }
//
//    public function testDuplicateExceptionOnCreatePageWithParentId()
//    {
//        $root = Page::create(['alias' => 'root-test-1']);
//        $root->children()->create(['alias' => 'child-page']);
//        // Protection against duplicate aliases
//        $this->expectException('Illuminate\Database\QueryException');
//        $root->children()->create(['alias' => 'child-page']);
//    }

//    public function testRenamingAliasForExistPage()
//    {
//        $root = Page::create(['alias' => 'root-test-updating']);
//        $second = $root->children()->create(['alias' => 'second-alias']);
//        $third = $second->children()->create(['alias' => 'third-alias']);
//        $third1 = $second->children()->create(['alias' => 'third-alias-1']);
//        $fourth = $third->children()->create(['alias' => 'fourth-alias']);
////        $second->alias = 'new-second-alias';
////        $second->save();
//    }

//    public function testLoadImageToPageAndRenameAliasForMovingImage()
//    {
//        $root = Page::create(['alias' => 'root-test-image']);
//        $child1 = Page::create(['alias' => 'child-page-image']);
//        $child1->makeChildOf($root);
//
//        $child2 = Page::create(['alias' => 'third-level-page']);
//        $child2->makeChildOf($child1);
//        $pathTo = $child2->loadImage('tests/images/ikmed-logo-big.jpg', [
//            'alt_ru' => 'alt RU',
//            'alt_en' => 'alt EN',
//            'sort_order_id' => 0,
//        ]);
//        echo $pathTo;
//    }

}
