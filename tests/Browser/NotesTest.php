<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NotesTest extends DuskTestCase
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
                    ->clickLink('Create Note')
                    ->assertSee('Create Note')
                    ->type('title', 'MODUL3 PPL 1202224131') 
                    ->type('description', 'bismillah lulus dapet A.')
                    ->press('CREATE');
        });
    }
}
