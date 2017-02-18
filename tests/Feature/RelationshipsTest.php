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

//    /**
//     * A basic test example.
//     *
//     * @return void
//     */
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }

    public function testPagePagesRelation()
    {
        $root = App\Page::create(['name_ru' => 'Root virtual node']);
        $root->children()->create(['name_ru' => 'Child 1']);
        $child2 = App\Page::create(['name_ru' => 'Child 2']);
        $child2->makeChildOf($root);
        $this->assertEquals($root->children()->count(), 2);
        $this->assertEquals($child2->first()->name_ru, 'Root virtual node');
    }

    public function testPageAndPageTypeRelation()
    {
        $pageType = factory(App\PageType::class)->create();
        $pages = factory(App\Page::class, 3)->create();
        $pageType->pages()->saveMany($pages);
        $pageType->pages()->get()->each(function ($page) {
            $this->assertTrue(strlen($page->title_ru) > 0 && gettype($page) == 'object');
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

    public function testPortfolioWorksImagesRelation()
    {
        $portfolioWork = factory(App\PortfolioWork::class)->make();
        $portfolioWork->save();
        $images = factory(App\Image::class, 2)->create();
        $portfolioWork->images()->saveMany($images);
        $this->assertEquals($portfolioWork->images()->count(), 2);

        $image = factory(App\Image::class)->make();
        $image->save();
        $portfolioWorks = factory(App\PortfolioWork::class, 3)->create();
        $image->portfolio_works()->saveMany($portfolioWorks);
        $this->assertEquals($image->portfolio_works()->count(), 3);
    }

    public function testReviewsPortfolioWorksRelations()
    {
        // In example: phone = Review, user = PortfolioWork

        // It's work!
//        $portfolioWork = App\Review::find(1)->portfolio_work;
//        var_dump($portfolioWork->title);

        // It's work too
//        $review = App\PortfolioWork::find(7)->review;
//        var_dump($review->content);

        // isn't work
//        $review1->portfolio_work()->save($portfolioWork1);

        // It's work
//        $portfolioWork1 = factory(App\PortfolioWork::class)->make();
//        $portfolioWork1->save();
//        $review1 = factory(App\Review::class)->make();
//        $review1->portfolio_work()->associate($portfolioWork1);
//        $review1->save();

        // It's work
//        $review2 = factory(App\Review::class)->make();
//        $review2->save();
//        $portfolioWork2 = factory(App\PortfolioWork::class)->make();
//        $portfolioWork2->save();
//        $portfolioWork2->review()->save($review2);

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

//    public function testPortfolioWorksPortfolioCategoriesRelation()
//    {
//        $portfolioWorks = factory(App\PortfolioWork::class, 3)->create();
//        $portfolioCategory = factory(App\PortfolioCategory::class)->make();
//        $portfolioCategory->save();
//        $portfolioCategory->portfolio_works()->saveMany($portfolioWorks);
//        $portfolioCategory->portfolio_works()->get()->each(function ($portfolioWork) use ($portfolioCategory) {
//            $this->assertTrue(strlen($portfolioWork->title) > 0 && gettype($portfolioWork) == 'object');
//            $this->assertEquals($portfolioWork->portfolio_category->name, $portfolioCategory->name);
//        });
//    }

    public function testTagsPortfolioWorksRelation()
    {
        $portfolioWork = factory(App\PortfolioWork::class)->make();
        $portfolioWork->save();
        $tags = factory(App\Tag::class, 2)->create();
        $portfolioWork->tags()->saveMany($tags);
        $this->assertEquals($portfolioWork->tags()->count(), 2);

        $tag = factory(App\Tag::class)->make();
        $tag->save();
        $portfolioWorks = factory(App\PortfolioWork::class, 3)->create();
        $tag->portfolio_works()->saveMany($portfolioWorks);
        $this->assertEquals($tag->portfolio_works()->count(), 3);
    }

    public function testTagsNewsRelation()
    {
        $newsItem = factory(App\News::class)->make();
        $newsItem->save();
        $tags = factory(App\Tag::class, 2)->create();
        $newsItem->tags()->saveMany($tags);
        $this->assertEquals($newsItem->tags()->count(), 2);

        $tag = factory(App\Tag::class)->make();
        $tag->save();
        $portfolioWorks = factory(App\PortfolioWork::class, 3)->create();
        $tag->portfolio_works()->saveMany($portfolioWorks);
        $this->assertEquals($tag->portfolio_works()->count(), 3);
    }

    public function testNewsImagesRelation()
    {

//        $this->markTestSkipped('must be revisited.');

        $newsItem = factory(App\News::class)->make();
        $newsItem->save();
        $images = factory(App\Image::class, 2)->create();
        $newsItem->images()->saveMany($images);
        $this->assertEquals($newsItem->images()->count(), 2);

        $tag = factory(App\Tag::class)->make();
        $tag->save();
        $newsItems = factory(App\News::class, 3)->create();
        $tag->news()->saveMany($newsItems);
        $this->assertEquals($tag->news()->count(), 3);
    }

}
