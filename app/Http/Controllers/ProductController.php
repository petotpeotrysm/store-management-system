<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'supplier'])->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'nullable'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index');
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.edit', compact(
            'product',
            'categories',
            'suppliers'
        ));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}