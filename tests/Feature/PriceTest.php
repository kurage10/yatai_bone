<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\TestCase;
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
    public function testExample()
    {
        $this->call('GET', '/price');
        //$this->press("焼きそば一丁");
        //$this->assertTrue(true);
    }
}
