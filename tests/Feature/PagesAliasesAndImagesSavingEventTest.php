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

    public function testDuplicateExceptionOnCreatePage()
    {
        $root = Page::create(['alias' => 'root-test']);
        $root->children()->create(['alias' => 'child-page-1']);

        $this->expectException('Illuminate\Database\QueryException');
//        $this->expectExceptionMessage('alias already exist in siblings');
        $root->children()->create(['alias' => 'child-page-1']);
    }

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
