@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Dashboard Admin
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <a href="{{ route('products.index') }}"
       class="bg-blue-500 text-white p-6 rounded-lg shadow hover:scale-105 duration-200">

        <h2 class="text-lg">📦 Produk</h2>

        <p class="text-4xl font-bold mt-3">
            {{ $totalProduct }}
        </p>

    </a>

    <a href="{{ route('categories.index') }}"
       class="bg-green-500 text-white p-6 rounded-lg shadow hover:scale-105 duration-200">

        <h2 class="text-lg">📂 Kategori</h2>

        <p class="text-4xl font-bold mt-3">
            {{ $totalCategory }}
        </p>

    </a>

    <a href="{{ route('suppliers.index') }}"
       class="bg-yellow-500 text-white p-6 rounded-lg shadow hover:scale-105 duration-200">

        <h2 class="text-lg">🚚 Supplier</h2>

        <p class="text-4xl font-bold mt-3">
            {{ $totalSupplier }}
        </p>

    </a>

    <div class="bg-red-500 text-white p-6 rounded-lg shadow">

        <h2 class="text-lg">💰 Penjualan</h2>

        <p class="text-4xl font-bold mt-3">
            {{ $totalSale }}
        </p>

    </div>

</div>

@endsection