@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-5">Edit Supplier</h1>

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <input type="text" name="name"
                   value="{{ $supplier->name }}"
                   class="border p-2 rounded w-full">
        </div>

        <div class="mb-4">
            <input type="text" name="phone"
                   value="{{ $supplier->phone }}"
                   class="border p-2 rounded w-full">
        </div>

        <div class="mb-4">
            <input type="text" name="address"
                   value="{{ $supplier->address }}"
                   class="border p-2 rounded w-full">
        </div>

        <button type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
@endsection