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
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/price')
                    ->assertSee('0円')
                    ->press('焼きそば一丁')
                    ->assertSee('500円')
                    ->press('焼きそば一丁')
                    ->assertSee('1000円')
                    ->press('キャンセル')
                    ->assertSee('500円');
        });
    }
}
