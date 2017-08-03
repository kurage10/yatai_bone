<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PriceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
      $this->visitRoute('price');
      /*
        $this->browse(function ($browser) {
            $browser->visit('/price')
            -> assertSee('0円')
            -> press('購入')
            -> seePageIs("/price")
            -> assertSee('500円');
        });*/
    }
}
