<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalProduct' => Product::count(),
            'totalCategory' => Category::count(),
            'totalSupplier' => Supplier::count(),
            'totalSale' => 0, // nanti diganti saat modul penjualan selesai
        ]);
    }
}