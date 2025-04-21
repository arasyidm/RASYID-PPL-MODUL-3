<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->type('name', 'Achmad Rasyid') 
                    ->type('email', value: 'rasyid@example.com') 
                    ->type('password', 'password123') 
                    ->type('password_confirmation', 'password123') 
                    ->press('REGISTER');
        });
    }
}
