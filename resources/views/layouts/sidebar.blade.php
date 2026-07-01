<div class="w-64 bg-gray-900 text-white min-h-screen flex flex-col">

    <div class="p-6 text-center border-b border-gray-700">
        <h1 class="text-2xl font-bold">
            🏪 POS Store
        </h1>

        <p class="text-gray-400 text-sm mt-2">
            Store Management System
        </p>
    </div>

    <nav class="flex-1 mt-6">

        <a href="{{ route('dashboard') }}"
            class="block px-6 py-3 hover:bg-gray-800">
            📊 Dashboard
        </a>

        <hr class="border-gray-700 my-3">

        <p class="px-6 text-xs text-gray-400 uppercase">
            Master Data
        </p>

        <a href="#"
            class="block px-6 py-3 hover:bg-gray-800">
            📦 Produk
        </a>

        <a href="#"
            class="block px-6 py-3 hover:bg-gray-800">
            📂 Kategori
        </a>

        <a href="#"
            class="block px-6 py-3 hover:bg-gray-800">
            🚚 Supplier
        </a>

        <hr class="border-gray-700 my-3">

        <p class="px-6 text-xs text-gray-400 uppercase">
            Transaksi
        </p>

        <a href="#"
            class="block px-6 py-3 hover:bg-gray-800">
            🛒 Penjualan
        </a>

        <hr class="border-gray-700 my-3">

        <p class="px-6 text-xs text-gray-400 uppercase">
            Laporan
        </p>

        <a href="#"
            class="block px-6 py-3 hover:bg-gray-800">
            📈 Laporan Penjualan
        </a>

    </nav>

    <div class="border-t border-gray-700 p-6">

        <div class="text-sm mb-4">
            👤 {{ Auth::user()->name }}
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                class="w-full bg-red-500 hover:bg-red-600 py-2 rounded">
                Logout
            </button>

        </form>

    </div>

</div>