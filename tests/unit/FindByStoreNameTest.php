<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Store;

class FindByStoreNameTest extends TestCase
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

    public function testStoreCanBeFoundByStoreName()
    {
        $createdStore = factory(Store::class)->create([
            'store_name' => 'New store name',
            'store_description' => 'New store description found here',
            'user_id' => 1
        ]);

        $foundStore = Store::findByStoreName('New store name');

        $this->assertEquals($createdStore->store_name, $foundStore->store_name);
    }
}
