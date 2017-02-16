<?php

use Illuminate\Database\Seeder;

class PagesAndPageTypesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // pages
//        $table->increments('id');
//        $table->integer('type_id')->nullable()->index();
//        $table->string('template')->nullable();
//        $table->string('title');
//        $table->text('description')->nullable();
//        $table->text('content')->nullable();
//        $table->string('url')->nullable();
//        $table->integer('parent_id')->nullable()->index();
//        $table->integer('lft')->nullable()->index();
//        $table->integer('rgt')->nullable()->index();
//        $table->integer('depth')->nullable();

        // page_types
//        $table->increments('id');
//        $table->string('name');

//        $flight = new Flight;
//        $flight->name = $request->name;
//        $flight->save();

        $rootVirtualNode = App\Page::create(['name' => 'Root virtual node', 'show_in_main_menu' => false]);

        $pageType = App\PageType::create(
            ['name' => 'Landing']
        );

        $pages = [
            [
                'name' => 'Главная',
                'title' => 'Сайт надо? Очень красивый!',
                'template' => 'pages.index',
                'url' => 'index',
                'type_id' => $pageType->id,
                'show_in_main_menu' => false,
            ],
            [
                'name' => 'Цена',
                'title' => 'Выгодная цена за фильтрованный концентрат',
                'template' => 'pages.price',
                'url' => 'price',
                'type_id' => $pageType->id,
            ],
            [
                'name' => 'Инструменты',
                'title' => 'Инструменты, которые я использую',
                'template' => 'pages.tools',
                'url' => 'tools',
                'type_id' => $pageType->id,
            ],
            [
                'name' => 'Главная',
                'title' => 'Пример рабочего процесса',
                'template' => 'pages.process',
                'url' => 'process',
                'type_id' => $pageType->id,
            ],
            [
                'name' => 'Портфолио',
                'title' => 'Портфолио',
                'template' => 'pages.portfolio',
                'url' => 'portfolio',
                'type_id' => $pageType->id,
            ],
            [
                'name' => 'Отзывы',
                'title' => 'Отзывы',
                'template' => 'pages.reviews',
                'url' => 'reviews',
                'type_id' => $pageType->id,
            ],
            [
                'name' => 'Прочь',
                'title' => 'Прочь',
                'template' => 'pages.off',
                'url' => 'off',
                'active' => false,
                'type_id' => $pageType->id,
            ],
        ];

        foreach ($pages as $page) {
            $rootVirtualNode->children()->create($page);
        }
    }
}
