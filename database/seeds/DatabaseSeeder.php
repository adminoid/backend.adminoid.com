<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name_ru' => 'Главная',
                'name_en' => 'Main',
                'title_ru' => 'Сайт надо? Очень красивый!',
                'title_en' => 'The site should be? Very beautiful!',
                'template' => 'pages.index',
                'url' => 'index',
                'show_in_main_menu' => false,
            ],
            [
                'name_ru' => 'Цена',
                'name_en' => 'Price',
                'title_ru' => 'Выгодная цена за фильтрованный концентрат',
                'title_en' => 'Reasonable price for the filtered concentrate',
                'template' => 'pages.price',
                'url' => 'price',
            ],
            [
                'name_ru' => 'Инструменты',
                'name_en' => 'Tools',
                'title_ru' => 'Инструменты, которые я использую',
                'title_en' => 'Tools I use',
                'template' => 'pages.tools',
                'url' => 'tools',
            ],
            [
                'name_ru' => 'Процесс',
                'name_en' => 'Workflow',
                'title_ru' => 'Пример рабочего процесса',
                'title_en' => 'Example workflow',
                'template' => 'pages.workflow',
                'url' => 'workflow',
            ],
            [
                'name_ru' => 'Портфолио',
                'name_en' => 'Portfolio',
                'title_ru' => 'Портфолио',
                'title_en' => 'Portfolio',
                'template' => 'pages.portfolio',
                'url' => 'portfolio',
            ],
            [
                'name_ru' => 'Отзывы',
                'name_en' => 'Reviews',
                'title_ru' => 'Отзывы',
                'title_en' => 'Reviews',
                'template' => 'pages.reviews',
                'url' => 'reviews',
            ],
        ];

        foreach ($pages as $page) {
            App\Page::create($page);
        }

        $portfolioData = [
            [
                'url' => 'online-store-ikmed-ru',
                'title_ru' => 'Интернет-магазин "ikmed.ru"',
                'title_en' => 'Online Store ikmed.ru',
                'description_ru' => "Backend: 
PHP 5.6, Laravel 4.2, Ubuntu (homestead/Forge), Linode;<br> 
Frontend:<br>
HTML5, CSS3, LESS, SASS, Twitter bootstrap 3, Grunt;<br> 
JavaScript, Vue.js, JQuery, ExtJS, and other simple js frameworks;<br> 
<br>
Интеграция с: СДЭК, Яндекс.Касса, Яндекс.Маркет<br> 
SEO-оптимизация",
                'description_en' => "Backend:<br>
PHP 5.6, Laravel 4.2, Ubuntu (homestead / Forge), Linode;<br>
Frontend:<br>
HTML5, CSS3, LESS, SASS, Twitter bootstrap 3, Grunt;<br>
JavaScript, Vue.js, JQuery, ExtJS, and other simple js frameworks;<br>
<br>
Integration: SDEK, Yandeks.Kassa, of Yandex.Market<br>
SEO-optimization",
                'sort_order_id' => 0,
                'priority_level' => 'high',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5683403',
                'link' => 'https://www.ikmed.ru',
                'custom_date' => '2015-2016',
                'custom_face' => true,
                'images' => [
                    'database/seeds/images/portfolio/0/0.jpg',
                    'database/seeds/images/portfolio/0/f_1545741da73a36a9.jpg',
                    'database/seeds/images/portfolio/0/f_3535741daa459a8d.jpg',
                    'database/seeds/images/portfolio/0/f_7345741daaadbd96.jpg',
                ]
            ],
            [
                'url' => 'orders-control-panel-for-ikmed-ru',
                'title_ru' => 'Админка заказов для Интернет-магазина "ikmed.ru"',
                'title_en' => 'Orders control panel for e-shop "ikmed.ru"',
                'description_ru' => "",
                'description_en' => "",
                'sort_order_id' => 1,
                'priority_level' => 'high',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5683426',
                'link' => 'https://www.ikmed.ru',
                'custom_date' => '2015',
                'custom_face' => true,
                'images' => [
                    'database/seeds/images/portfolio/1/f_14657436ae522b62.jpg',
                ]
            ],
            [
                'url' => 'products-control-panel-for-ikmed-ru',
                'title_ru' => 'Админка товаров для Интернет-магазина "ikmed.ru"',
                'title_en' => 'Products control panel for e-shop "ikmed.ru"',
                'description_ru' => "witter Bootstrap, SASS<br> 
Dropzone.js<br>
Summernote.js<br>
CRUD/Laravel resource",
                'description_en' => "Twitter Bootstrap, SASS<br> 
Dropzone.js<br>
Summernote.js<br>
CRUD/Laravel resource",
                'sort_order_id' => 2,
                'priority_level' => 'high',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5683494',
                'link' => 'https://www.ikmed.ru',
                'custom_date' => '2016',
                'custom_face' => true,
                'images' => [
                    'database/seeds/images/portfolio/2/0.jpg',
                    'database/seeds/images/portfolio/2/f_3105741bfd419e3d.jpg',
                    'database/seeds/images/portfolio/2/f_3495741bfd37ffb2.jpg',
                    'database/seeds/images/portfolio/2/f_4955741bfd3605da.jpg',
                ]
            ],
            [
                'url' => 'prices-control-panel-for-ikmed-ru',
                'title_ru' => 'Панель управления ценами и акциями, мониторинг позиций на Яндекс.Маркет для Интернет магазина "ikmed.ru"',
                'title_en' => 'Prices and stocks (and monitoring positions on Yandex.market) control panel for internet shop "ikmed.ru"',
                'description_ru' => "Интерактивный интерфейс, при изменении цены (например) – динамически пересчитываются все цифры и определяется позиция на маркете.",
                'description_en' => "Interactive interface, the price change (for example) - dynamically translated all the numbers and determined position in the convenience store.",
                'sort_order_id' => 3,
                'priority_level' => 'high',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5683489',
                'link' => 'https://www.ikmed.ru',
                'custom_date' => '2016',
                'custom_face' => true,
                'images' => [
                    'database/seeds/images/portfolio/3/f_31957436ab2538b2.jpg',
                ]
            ],
            [
                'url' => 'transfer-cpa-system',
                'title_ru' => 'Перенос CPA системы на новую платформу',
                'title_en' => 'Transfer CPA system to a new platform',
                'description_ru' => "",
                'description_en' => "",
                'sort_order_id' => 4,
                'priority_level' => 'middle',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5952421',
                'link' => '',
                'custom_date' => '2016',
                'images' => [
                    'database/seeds/images/portfolio/4/0.jpg',
                    'database/seeds/images/portfolio/4/f_42258ad87fa5bfb4.jpg',
                ]
            ],
            [
                'url' => 'e-shop-multilevel-referral-system',
                'title_ru' => 'Разработка Интернет магазина с многоуровневой реферальной системой',
                'title_en' => 'Development of an E-shop with multilevel referral system',
                'description_ru' => "",
                'description_en' => "",
                'sort_order_id' => 5,
                'priority_level' => 'middle',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5952433',
                'link' => '',
                'custom_date' => '2016',
                'images' => [
                    'database/seeds/images/portfolio/5/0.jpg',
                    'database/seeds/images/portfolio/5/f_01458ad8a2f10ae1.jpg',
                    'database/seeds/images/portfolio/5/f_99858ad8a4bafaf8.jpg',
                ]
            ],
            [
                'url' => 'accounting-system-google-spreadsheet',
                'title_ru' => 'Автоматизированная система учета в Google spreadsheet',
                'title_en' => 'Automated accounting system in Google spreadsheet',
                'description_ru' => "",
                'description_en' => "",
                'sort_order_id' => 6,
                'priority_level' => 'middle',
                'external_url' => 'https://www.fl.ru/users/adminoid/viewproj.php?prjid=5952433',
                'link' => '',
                'custom_date' => '2016',
                'images' => [
                    'database/seeds/images/portfolio/6/f_89458ad8f9d7d5a1.jpg',
                ]
            ],
        ];

        // fields for page:
        // url, title_ru, title_en, description_ru, description_en
        // fields for portfolio work:
        // title_ru, title_en, description_ru, description_en, sort_order_id,
        // priority_level, external_url, link, custom_date, custom_face

        $portfolioPage = App\Page::where(['url' => 'portfolio'])->first();

        foreach ($portfolioData as $item) {
            $pageData = array_slice($item, 0, 5, true);
            array_shift($item);
            $images = array_pop($item);
            $page = App\Page::create($pageData);
            $page->makeChildOf($portfolioPage);
            $portfolioWork = App\PortfolioWork::create($item);
            $portfolioWork->page()->save($page);
            $imageSortOrder = 0;
            foreach ($images as $imageData) {
                $page->loadImage($imageData, ['sort_order_id' => $imageSortOrder++]);
            }
        }

    }
}
