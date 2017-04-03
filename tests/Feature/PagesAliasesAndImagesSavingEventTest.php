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
        $this->expectException('Symfony\Component\HttpKernel\Exception\HttpException');
        $this->expectExceptionMessage('alias already exist in siblings');
        $root->children()->create(['alias' => 'child-page-1']);
    }

    public function testLoadImageToPageAndRenameAliasForMovingImage()
    {
        $root = Page::create(['alias' => 'root-test-image']);
        $child1 = Page::create(['alias' => 'child-page-image']);
        $child1->makeChildOf($root);
//        $child2 = Page::create(['alias' => 'child-page-image']);
//        $child2->makeChildOf($child1);
//        $child2->loadImage('tests/images/ikmed-logo-big.jpg');
    }
}
