<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Store;
use Auth;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCreateProduct($storeName)
    {
        $store = Store::findByStoreName($storeName);

        return view('products.create', ['store' => $store]);
    }

    public function postCreateProduct(ProductRequest $request, $id)
    {
        $store = Store::findOrFail($id);

        $newProduct = new Product;
        $newProduct->product_description = $request->input('product_description');
        $newProduct->product_name = $request->input('product_name');
        $newProduct->store_id = $store->id;
        $newProduct->user_id = auth()->user()->id;
        $newProduct->save();

        return redirect('/');
    }
}
