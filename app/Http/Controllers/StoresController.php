<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Store;
use App\Http\Requests;
use App\Http\Requests\StoreRequest;
use App\Product;

class StoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['find']]);
    }
    
    public function find($storeName)
    {
        $store = Store::findByStoreName($storeName);

        $allProducts = Product::where('store_id', $store->id)->paginate(10);

        return view('stores.show', [
            'store' => $store,
            'allProducts' =>$allProducts,
        ]);
    }
    /**
     * Method to show the create view
     *
     * @return Store create view
     */
    public function show()
    {
        return view('stores.create');
    }

    /**
     * Method to save the information given
     *
     * @return redirect to root page
     */
    public function store(StoreRequest $request)
    {
        $newStore = new Store;
        $newStore->store_name = $request->input('store_name');
        $newStore->store_description = $request->input('store_description');
        $request->user()->stores()->save($newStore);

        return redirect('/');
    }
}
