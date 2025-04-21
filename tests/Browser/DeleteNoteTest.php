<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') 
                ->type('email', 'rasyid@example.com')
                ->type('password', 'password123') 
                ->press('LOG IN') 
                ->visit('/notes') 
                ->assertSee('MODUL 3 - EDITED') 
                ->press('Delete');
        });
    }
}
