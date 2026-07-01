@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="bg-blue-500 text-white p-6 rounded-lg shadow">
        <h2 class="text-lg">📦 Produk</h2>
        <p class="text-4xl font-bold">{{ $totalProduct }}</p>
    </div>

    <div class="bg-green-500 text-white p-6 rounded-lg shadow">
        <h2 class="text-lg">📂 Kategori</h2>
        <p class="text-4xl font-bold">{{ $totalCategory }}</p>
    </div>

    <div class="bg-yellow-500 text-white p-6 rounded-lg shadow">
        <h2 class="text-lg">🚚 Supplier</h2>
        <p class="text-4xl font-bold">{{ $totalSupplier }}</p>
    </div>

    <div class="bg-red-500 text-white p-6 rounded-lg shadow">
        <h2 class="text-lg">🧾 Penjualan</h2>
        <p class="text-4xl font-bold">{{ $totalSale }}</p>
    </div>

</div>

@endsection