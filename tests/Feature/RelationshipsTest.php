<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App;

class RelationshipsTest extends TestCase
{

//    use DatabaseTransactions;
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
        $root = App\Page::create(['title' => 'Root category']);
        $root->children()->create(['title' => 'Child 1']);
        $child2 = App\Page::create(['title' => 'Child 2']);
        $child2->makeChildOf($root);
        $this->assertEquals($root->children()->count(), 2);
        $this->assertEquals($child2->first()->title, 'Root category');
    }

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

    public function testPortfolioWorksImagesRelation()
    {
        $portfolioWorks = factory(App\PortfolioWork::class, 3)->create();
        $images = factory(App\Image::class, 2)->create();
        $portfolioWorks->each(function ($portfolioWork) use ($images) {
            $portfolioWork->images()->saveMany($images);
            $this->assertEquals($portfolioWork->images()->count(), 2);
        });
    }

    public function testImagesPortfolioWorksRelation()
    {
        $images = factory(App\Image::class, 2)->create();
        $portfolioWorks = factory(App\Page::class, 3)->create();
        $images->each(function ($image) use ($portfolioWorks) {
            $image->pages()->saveMany($portfolioWorks);
            $this->assertEquals($image->pages()->count(), 3);
        });
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
        $this->assertEquals($portfolioWork1->title, $review1->portfolio_work->title);

        $review2 = factory(App\Review::class)->make();
        $review2->save();
        $portfolioWork2 = factory(App\PortfolioWork::class)->make();
        $portfolioWork2->save();
        $portfolioWork2->review()->save($review2);
        $this->assertEquals($review2->content, $portfolioWork2->review->content);
    }

    public function testPortfolioWorksPortfolioCategoriesRelation()
    {
        $portfolioWorks = factory(App\PortfolioWork::class, 3)->create();
        $portfolioCategory = factory(App\PortfolioCategory::class)->make();
        $portfolioCategory->save();
        $portfolioCategory->portfolio_works()->saveMany($portfolioWorks);
        $portfolioCategory->portfolio_works()->get()->each(function ($portfolioWork) {
            $this->assertTrue(strlen($portfolioWork->title) > 0 && gettype($portfolioWork) == 'object');
            $portfolioCategoryMustBeOne = $portfolioWork->portfolio_category()->get()->count();
            $this->assertTrue($portfolioCategoryMustBeOne == 1);
        });
    }
}
