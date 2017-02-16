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
        $tags = [
            [
                'name' => 'Веб-программирование',
            ],
            [
                'name' => 'Верстка',
            ],
        ];

    }
}
