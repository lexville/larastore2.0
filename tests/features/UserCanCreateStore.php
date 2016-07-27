<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserCanCreateStore extends TestCase
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

    public function testUserCanCreateStore()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->press('Add new store')
            ->seePageIs('/store/create')
            ->type('New store', 'store_name')
            ->type('New store description found here', 'store_description')
            ->press('Create Store')
            ->seeInDatabase('stores', ['store_name' => 'New store']);
    }
}
