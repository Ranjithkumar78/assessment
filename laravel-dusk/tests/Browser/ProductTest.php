<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    // public function testExample(): void
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/')
    //                 ->assertSee('Laravel');
    //     });
    // }
    public function testExample()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->screenshot('example-test') // This will save a screenshot in tests/Browser/screenshots
                ->assertSee('Laravel');
    });
}
}
