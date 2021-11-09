<?php

namespace App\Http\Controllers;

use App\Jobs\GetXmlJob;
use App\Models\Shop;
use Carbon\Carbon;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('products')->get();
        $real_time = Carbon::now();
        $real_time = $real_time->toTimeString();

        return view('index', compact('shops', 'real_time'));
    }

    public function xml()
    {
        $shops = Shop::with('products')->get();
        $real_time = Carbon::now();
        $real_time = $real_time->toTimeString();

        return response()->view('xml', compact('shops', 'real_time'))->header('Content-type', 'text/xml');
    }
}
