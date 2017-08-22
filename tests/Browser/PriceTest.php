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
                    ->assertSee("売れたお好み焼き")
                    ->assertSee("売れたお好み焼きセット")
                    ->assertSee("総額")
                    ->assertSee("残額")
                    ->assertSee("お好み焼き")
                    ->assertSee("お好み焼きセット")
                    ->assertVisible('input#send_btn');
        });
    }
    // ボタン押すテスト
    /*
    public function testPageViewGoalCriteria()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/price')
                    ->
        });
    }*/
}
