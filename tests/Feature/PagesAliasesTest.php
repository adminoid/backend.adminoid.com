<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Page;

class PagesAliasesTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * create two with different aliases as siblings, rename second page alias to same with first page
     *
     * @return void
     */
    public function testRenamingAliasToExistOfThisParent()
    {
        $this->markTestSkipped('after unit test PageTest.');
        $root = Page::create(['alias' => 'root-1']);
        $child1 = Page::create(['alias' => 'child-1']);
        $child1->makeChildOf($root);
        $child2 = Page::create(['alias' => 'child-2']);
        $child2->makeChildOf($root);
    }
}
