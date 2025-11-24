{{-- File: resources/views/livewire/catalog.blade.php --}}

<style>
    /* Menggunakan font kustom */
    .font-display { font-family: var(--font-display); }
    .font-body { font-family: var(--font-body); }
    
    /* Warna kustom */
    .bg-pastel-3 { background-color: var(--color-pastel-bliss-3); }
    .text-dark { color: var(--color-text-dark); }
    .text-light { color: var(--color-text-light); }
    .bg-primary-btn { background-color: var(--color-button-primary); }
    .bg-primary-btn:hover { background-color: #A3866E; /* Sedikit lebih gelap saat hover */ }
    .text-accent { color: var(--color-accent-strong); }
</style>

{{-- Menggunakan Latar Belakang Pastel Bliss 3 --}}
<div class="container mx-auto py-12 bg-pastel-3"> 

    <h1 class="text-4xl font-display text-center mb-10 text-dark font-bold">
        Katalog Bunga Pilihan 💐
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
        
        @foreach($products as $product)
            {{-- Kartu Produk menggunakan Latar Belakang Putih & Bayangan Halus --}}
            <div class="rounded-xl shadow-xl overflow-hidden transition duration-300 hover:shadow-2xl bg-white border border-pastel-2">
                
                {{-- Gambar Produk --}}
                {{-- Asumsi: path gambar ada di public/images/ --}}
                <img class="w-full h-56 object-cover" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"> 
                
                <div class="p-5 font-body">
                    
                    <h2 class="text-xl font-display mb-1 text-dark font-semibold">
                        {{ $product->name }}
                    </h2>
                    
                    {{-- Deskripsi Produk --}}
                    <p class="text-sm mb-3 text-light h-12 overflow-hidden">
                        {{ $product->desc }}
                    </p>

                    {{-- Harga menggunakan Warna Aksen Kuat --}}
                    <p class="text-2xl text-accent font-display font-bold mb-4">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    {{-- Tombol Aksi menggunakan Warna Primer --}}
                    <button class="w-full py-3 rounded-lg text-white font-medium text-lg bg-primary-btn shadow-md hover:shadow-lg transition duration-200">
                        <i class="fas fa-shopping-cart"></i> Tambahkan ke Keranjang
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>