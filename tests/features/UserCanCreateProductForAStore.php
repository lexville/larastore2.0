<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Store;
use App\User;

class UserCanCreateProductForAStore extends TestCase
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

    public function testUserCanCreateProductForAStore()
    {
        $user = factory(User::class)->create();

        factory(Store::class)->create([
            'store_name' => 'New store',
            'store_description' => 'New store description found here',
            'user_id' => 1,
        ]);

        $this->actingAs($user)
            ->visit('/store/1/product/create')
            ->type('New product', 'product_name')
            ->type('New product description found here', 'product_description')
            ->press('Create product')
            ->seeInDatabase('products', ['product_name' => 'New product']);
    }
}
