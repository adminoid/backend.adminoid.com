<?php

namespace Tests\Unit;

use App\Page;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{

    public function testFixAlias()
    {
        $badAlias          = 'gh Петя Зенин 9d_sd%sdf_f8F#sdfGF';
        $goodAliasTemplate = 'gh-petya-zenin-9d-sdsdf-f8fsdfgf';
        $goodAlias = Page::fixAlias($badAlias);
        $this->assertEquals($goodAlias, $goodAliasTemplate);
    }

    public function testGenerateUri()
    {
        $root = Page::create(['alias' => 'root']);
        $child1 = Page::create(['alias' => 'child-leaf']);
        $child1->makeChildOf($root);
        $this->assertEquals('root/child-leaf.html', $child1->generateUri());
        $this->assertEquals('root/', $root->generateUri());
    }

    public function testIsExistAliasInChildren()
    {
        $root = Page::create(['alias'=>'root']);
        $child = Page::create(['alias' => 'child']);
        $child->makeChildOf($root);
        $this->assertTrue($root->isExistAliasInChildren('child'));
        $this->assertFalse($root->isExistAliasInChildren('child-not-found'));
    }
}
