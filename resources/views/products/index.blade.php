@extends('layouts.admin')

@section('content')
<h1 class="text-3xl font-bold mb-5">Data Produk</h1>

<a href="{{ route('products.create') }}"
   class="bg-blue-500 text-white px-4 py-2 rounded">
   Tambah Produk
</a>

<table class="mt-5 w-full border">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Supplier</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Aksi</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->supplier->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}"
       class="text-blue-500 mr-3">
        Edit
            </a>

            <form   action="{{ route('products.destroy', $product->id) }}"
                    method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')

                <button type="submit" class="text-red-500">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection