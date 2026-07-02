@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-5">Tambah Kategori</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <input type="text"
                   name="name"
                   placeholder="Masukkan nama kategori"
                   class="border p-2 rounded w-full">
        </div>

        <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>
@endsection