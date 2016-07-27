<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserLogoutTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUserCanLogout()
    {
        factory(User::class)->create([
            'name' => 'lexville',
            'email' => 'lex@email.com',
            'password' => bcrypt('secret'),
        ]);

        $this->visit('/register')
            ->type('lex@email.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->visit('/logout')
            ->see('Login');
    }
}
