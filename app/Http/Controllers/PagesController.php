<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preorder;
use App\Models\Product;
use App\Models\Supply;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        $date = Carbon::createFromTimestamp(Supply::orderBy('created_at')->first()->created_at)->toDateString();
        $products = Product::get();
        return view('index', ['products' => $products, 'date' => $date]);
    }

    public function getProductsByDate($date)
    {
        $products = Product::get();
        return view('index', ['products' => $products, 'date' => $date]);
    }
}
