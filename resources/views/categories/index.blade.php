@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-5">Data Kategori</h1>

    <a href="{{ route('categories.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded">
       Tambah Kategori
    </a>

    <table class="mt-5 w-full border">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}"
                class="text-blue-500 mr-3">
                    Edit
                </a>

                <form action="{{ route('categories.destroy', $category->id) }}"
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