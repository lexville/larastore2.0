<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Store;

class ProductsController extends Controller
{
    public function getCreateProduct($storeName)
    {
        $store = Store::findByStoreName($storeName);

        return view('products.create', ['store' => $store]);
    }
}
