<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white flex flex-col justify-between">

        <div>

            <div class="p-6 text-2xl font-bold border-b border-slate-700">
                🏪 Store POS
            </div>

            <nav class="mt-5">

                <a href="{{ route('dashboard') }}"
                    class="block px-6 py-3 mx-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-blue-600' : 'hover:bg-slate-700' }}">
                    🏠 Dashboard
                </a>

                <a href="{{ route('products.index') }}"
                    class="block px-6 py-3 mx-2 rounded-lg hover:bg-slate-700">
                    📦 Produk
                </a>

                <a href="{{ route('categories.index') }}"
                    class="block px-6 py-3 mx-2 rounded-lg hover:bg-slate-700">
                    📁 Kategori
                </a>

                <a href="{{ route('suppliers.index') }}"
                    class="block px-6 py-3 mx-2 rounded-lg hover:bg-slate-700">
                    🚚 Supplier
                </a>

                <a href="#"
                    class="block px-6 py-3 mx-2 rounded-lg hover:bg-slate-700">
                    💰 Penjualan
                </a>

                <a href="#"
                    class="block px-6 py-3 mx-2 rounded-lg hover:bg-slate-700">
                    📊 Laporan
                </a>

            </nav>

        </div>

        <div class="p-4 border-t border-slate-700">

            <div class="text-center mb-3">
                {{ Auth::user()->name }}
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">
                    Logout
                </button>

            </form>

        </div>

    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>