<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PriceTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    // 単に見てくれのテスト
    public function testPageView()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/price')
                    ->assertSee("目標値")
                    ->assertSee("売れた焼きそば")
                    ->assertSee("売れた焼きそばセット")
                    ->assertSee("総額")
                    ->assertSee("残額")
                    ->assertSee("焼きそば")
                    ->assertSee("焼きそばセット")
                    ->assertVisible('input#send_btn');
        });
    }
}
