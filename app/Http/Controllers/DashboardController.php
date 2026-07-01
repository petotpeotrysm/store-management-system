<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduct = Product::count();
        $totalCategory = Category::count();
        $totalSupplier = Supplier::count();
        $totalSale = Sale::count();

        return view('dashboard', compact(
            'totalProduct',
            'totalCategory',
            'totalSupplier',
            'totalSale'
        ));
    }
}