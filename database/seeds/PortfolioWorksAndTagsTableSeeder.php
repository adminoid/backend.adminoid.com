<?php

use Illuminate\Database\Seeder;

class PortfolioWorksAndTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tags
        $composer = [
            'name' => 'composer',
            'icon' => '/static/img/adminoid/icons/tags/composer.png',
        ];
        $extJs = [
            'name' => 'ext.js',
            'icon' => '/static/img/adminoid/icons/tags/ext-js.png',
        ];
        $git = [
            'name' => 'git',
            'icon' => '/static/img/adminoid/icons/tags/git.png',
        ];
        $grunt = [
            'name' => 'grunt',
            'icon' => '/static/img/adminoid/icons/tags/grunt.png',
        ];
        $javascript = [
            'name' => 'javascript',
            'icon' => '/static/img/adminoid/icons/tags/javascript.png',
        ];
        $jquery = [
            'name' => 'jquery',
            'icon' => '/static/img/adminoid/icons/tags/jquery.png',
        ];
        $laravel = [
            'name' => 'laravel',
            'icon' => '/static/img/adminoid/icons/tags/laravel.png',
        ];
        $less = [
            'name' => 'less',
            'icon' => '/static/img/adminoid/icons/tags/less.png',
        ];
        $photoshop = [
            'name' => 'photoshop',
            'icon' => '/static/img/adminoid/icons/tags/photoshop.png',
        ];
        $php = [
            'name' => 'php',
            'icon' => '/static/img/adminoid/icons/tags/php.png',
        ];
        $twitterBootstrap = [
            'name' => 'twitter bootstrap',
            'icon' => '/static/img/adminoid/icons/tags/twitter-bootstrap.png',
        ];
        $vueJs = [
            'name' => 'vue.js',
            'icon' => '/static/img/adminoid/icons/tags/vue-js.png',
        ];

        // Portfolio works
        $portfolioWorks = [
            [
                'title' => 'Интернет-магазин под ключ',
                'zoom_image' => '',
                'custom_date' => '2015-2016'
            ]
        ];
    }
}
