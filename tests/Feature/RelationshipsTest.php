<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App;

class RelationshipsTest extends TestCase
{

    use DatabaseTransactions;
//    use DatabaseMigrations;

    public function testPagePagesRelation()
    {
        $root = App\Page::create(['slug' => 'root-1']);
        $root->children()->create(['slug' => 'child-1']);
        $child2 = App\Page::create(['slug' => 'child-2']);
        $child2->makeChildOf($root);
        $this->assertEquals($root->children()->count(), 2);
        $this->assertEquals($child2->parent()->first()->slug, 'root-1');
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

    public function testReviewsPortfolioWorksRelations()
    {
        $portfolioWork1 = factory(App\PortfolioWork::class)->make();
        $portfolioWork1->save();
        $review1 = factory(App\Review::class)->make();
        $review1->portfolio_work()->associate($portfolioWork1);
        $review1->save();
        $this->assertEquals($portfolioWork1->title_ru, $review1->portfolio_work->title_ru);

        $review2 = factory(App\Review::class)->make();
        $review2->save();
        $portfolioWork2 = factory(App\PortfolioWork::class)->make();
        $portfolioWork2->save();
        $portfolioWork2->review()->save($review2);
        $this->assertEquals($review2->content, $portfolioWork2->review->content);
    }

    public function testTagsPagesRelation()
    {
        $page = factory(App\Page::class)->make();
        $page->save();
        $tags = factory(App\Tag::class, 2)->create();
        $page->tags()->saveMany($tags);
        $this->assertEquals($page->tags()->count(), 2);

        $tag = factory(App\Tag::class)->make();
        $tag->save();
        $pages = factory(App\Page::class, 3)->create();
        $tag->pages()->saveMany($pages);
        $this->assertEquals($tag->pages()->count(), 3);
    }

    public function testNewsPageRelation()
    {
        $newsItem = factory(App\News::class)->make();
        $newsItem->save();
        $page = factory(App\Page::class)->make();
        $newsItem->page()->save($page);
        $this->assertEquals($newsItem->page->alias, $page->alias);
    }

    public function testPageNewsRelation()
    {
        $newsItem = factory(App\News::class)->make();
        $newsItem->save();
        $page = factory(App\Page::class)->make();
        $page->pageable()->associate($newsItem);
        $page->save();
        $this->assertEquals($page->pageable->title_ru, $newsItem->title_ru);
    }

    public function testPortfolioWorkPageRelation()
    {
        $portfolioWork = factory(App\PortfolioWork::class)->make();
        $portfolioWork->save();
        $page = factory(App\Page::class)->make();
        $portfolioWork->page()->save($page);
        $this->assertEquals($portfolioWork->page->alias, $page->alias);
    }

    public function testPagePortfolioWorkRelation()
    {
        $portfolioWork = factory(App\PortfolioWork::class)->make();
        $portfolioWork->save();
        $page = factory(App\Page::class)->make();
        $page->pageable()->associate($portfolioWork);
        $page->save();
        $this->assertEquals($page->pageable->title_ru, $portfolioWork->title_ru);
    }

    public function testReviewPageRelation()
    {
        $review = factory(App\Review::class)->make();
        $review->save();
        $page = factory(App\Page::class)->make();
        $review->page()->save($page);
        $this->assertEquals($review->page->alias, $page->alias);
    }

    public function testPageReviewRelation()
    {
        $review = factory(App\Review::class)->make();
        $review->save();
        $page = factory(App\Page::class)->make();
        $page->pageable()->associate($review);
        $page->save();
        $this->assertEquals($page->pageable->title_ru, $review->title_ru);
    }

}
