@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-5">Data Supplier</h1>

    <a href="{{ route('suppliers.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded">
       Tambah Supplier
    </a>

    <table class="mt-5 w-full border">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Aksi</th>
        </tr>

        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->address }}</td>
            <td>
                <a href="{{ route('suppliers.edit', $supplier->id) }}"
                class="text-blue-500 mr-3">
                    Edit
                </a>

                <form action="{{ route('suppliers.destroy', $supplier->id) }}"
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