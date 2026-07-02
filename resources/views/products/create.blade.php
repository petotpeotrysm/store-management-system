@extends('layouts.admin')

@section('content')
<h1 class="text-3xl font-bold mb-5">Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nama Produk"
           class="border p-2 rounded w-full mb-3">

    <select name="category_id" class="border p-2 rounded w-full mb-3">
        <option>Pilih Kategori</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <select name="supplier_id" class="border p-2 rounded w-full mb-3">
        <option>Pilih Supplier</option>
        @foreach($suppliers as $supplier)
            <option value="{{ $supplier->id }}">
                {{ $supplier->name }}
            </option>
        @endforeach
    </select>

    <input type="number" name="price" placeholder="Harga"
           class="border p-2 rounded w-full mb-3">

    <input type="number" name="stock" placeholder="Stock"
           class="border p-2 rounded w-full mb-3">

    <textarea name="description"
              placeholder="Deskripsi"
              class="border p-2 rounded w-full mb-3"></textarea>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>
@endsection