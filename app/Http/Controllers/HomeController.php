<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allStores = Store::personalize()->paginate(10);

        return view('welcome', ['allStores' => $allStores]);
    }
}
