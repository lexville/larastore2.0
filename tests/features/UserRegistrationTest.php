<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRegistrationTest extends TestCase
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

    public function testUserCanRegister()
    {
        $this->visit('/register')
            ->type('lexville', 'name')
            ->type('lex@email.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')
            ->seeInDatabase('users', ['name' => 'lexville']);
    }

    public function testRegisteredUsersNumberIncreases()
    {
        factory(User::class, 10)->create();

        $allUsers = User::count();

        $this->count(10, $allUsers);
    }
}
