@extends('layouts.admin')

@section('content')
<h1 class="text-3xl font-bold mb-5">Edit Produk</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $product->name }}"
           class="border p-2 rounded w-full mb-3">

    <select name="category_id" class="border p-2 rounded w-full mb-3">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <select name="supplier_id" class="border p-2 rounded w-full mb-3">
        @foreach($suppliers as $supplier)
            <option value="{{ $supplier->id }}"
                {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>
                {{ $supplier->name }}
            </option>
        @endforeach
    </select>

    <input type="number"
           name="price"
           value="{{ $product->price }}"
           class="border p-2 rounded w-full mb-3">

    <input type="number"
           name="stock"
           value="{{ $product->stock }}"
           class="border p-2 rounded w-full mb-3">

    <textarea name="description"
              class="border p-2 rounded w-full mb-3">{{ $product->description }}</textarea>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
@endsection