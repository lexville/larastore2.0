<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Store;
use App\Http\Requests;
use App\Http\Requests\StoreRequest;

class StoresController extends Controller
{
    /**
     * Method to show the create view
     *
     * @return Store create view
     */
    public function index()
    {
        $allStores = Store::personalize()->paginate(5);

        return view('welcome', ['allStores' => $allStores]);
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
