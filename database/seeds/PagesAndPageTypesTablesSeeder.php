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

        $rootVirtualNode = App\Page::create(
            [
                'name_ru' => 'Root virtual node',
                'show_in_main_menu' => false
            ]
        );

        $pageType = App\PageType::create(
            ['name' => 'Landing']
        );

        $pages = [
            [
                'name_ru' => 'Главная',
                'name_en' => 'Main',
                'title_ru' => 'Сайт надо? Очень красивый!',
                'title_en' => 'The site should be? Very beautiful!',
                'template' => 'pages.index',
                'url' => 'index',
                'type_id' => $pageType->id,
                'show_in_main_menu' => false,
            ],
            [
                'name_ru' => 'Цена',
                'name_en' => 'Price',
                'title_ru' => 'Выгодная цена за фильтрованный концентрат',
                'title_en' => 'Reasonable price for the filtered concentrate',
                'template' => 'pages.price',
                'url' => 'price',
                'type_id' => $pageType->id,
            ],
            [
                'name_ru' => 'Инструменты',
                'name_en' => 'Tools',
                'title_ru' => 'Инструменты, которые я использую',
                'title_en' => 'Tools I use',
                'template' => 'pages.tools',
                'url' => 'tools',
                'type_id' => $pageType->id,
            ],
            [
                'name_ru' => 'Процесс',
                'name_en' => 'Workflow',
                'title_ru' => 'Пример рабочего процесса',
                'title_en' => 'Example workflow',
                'template' => 'pages.workflow',
                'url' => 'workflow',
                'type_id' => $pageType->id,
            ],
            [
                'name_ru' => 'Портфолио',
                'name_en' => 'Portfolio',
                'title_ru' => 'Портфолио',
                'title_en' => 'Portfolio',
                'template' => 'pages.portfolio',
                'url' => 'portfolio',
                'type_id' => $pageType->id,
            ],
            [
                'name_ru' => 'Отзывы',
                'name_en' => 'Reviews',
                'title_ru' => 'Отзывы',
                'title_en' => 'Reviews',
                'template' => 'pages.reviews',
                'url' => 'reviews',
                'type_id' => $pageType->id,
            ],
            [
                'name_ru' => 'Прочь',
                'name_en' => 'Off',
                'title_ru' => 'Прочь',
                'title_en' => 'Off',
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
