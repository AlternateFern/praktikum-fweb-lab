<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex space-x-6">
                <a href="{{ route('dashboard') }}"
                    class="font-semibold {{ request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-gray-700' }}">
                    Dashboard
                </a>
 
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('categories.index') }}"
                        class="{{ request()->routeIs('categories.*') ? 'text-indigo-600' : 'text-gray-500' }}">
                        Kategori
                    </a>
                    <a href="{{ route('products.index') }}"
                        class="{{ request()->routeIs('products.*') ? 'text-indigo-600' : 'text-gray-500' }}">
                        Produk
                    </a>
                    <a href="{{ route('report.sales') }}"
                        class="{{ request()->routeIs('report.sales') ? 'text-indigo-600' : 'text-gray-500' }}">
                        Laporan
                    </a>
                @endif

                @if (auth()->user()->role === 'kasir')
                    <a href="{{ route('pos.history') }}"
                        class="{{ request()->routeIs('pos.history') ? 'text-indigo-600' : 'text-gray-500' }}">
                        Riwayat Transaksi Saya
                    </a>
                @endif
 
                <a href="{{ route('pos.index') }}"
                    class="{{ request()->routeIs('pos.index') ? 'text-indigo-600' : 'text-gray-500' }}">
                    Transaksi
                </a>
            </div>
 
            <div class="flex items-center space-x-4 text-sm">
                <span class="text-gray-600">{{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-500 hover:text-red-600">Keluar</button>
                </form>
            </div>
        </div>
    </div>
</nav>
