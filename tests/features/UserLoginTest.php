<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserLoginTest extends TestCase
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

    public function testUserCanLogin()
    {
        factory(User::class)->create([
            'name' => 'lexville',
            'email' => 'lex@email.com',
            'password' => bcrypt('secret'),
        ]);

        $this->visit('/login')
            ->type('lex@email.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->see('lexville');
    }
}
