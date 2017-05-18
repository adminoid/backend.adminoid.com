<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MainMenuTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * for running dusk on laradock server
     *
     * @return void
     */
    public function testActiveMenuItem()
    {
        $this->browse(function (Browser $browser) {
//            $browser->visit('/')
//                    ->assertSee('Laravel');
            $attribute = $browser->visit('/tools.html')->attribute('#tools', 'class');
            dump($attribute);
        });
    }
}
