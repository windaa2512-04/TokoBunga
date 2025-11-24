<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHISPERING FLORA - Temukan Bunga Impian Anda</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Variabel CSS untuk Palet Warna "Pastel Bliss" */
        :root {
            --color-pastel-bliss-1: #FFB5A7; /* Primer Pink */
            --color-pastel-bliss-2: #FCD5CE; /* Light Pink */
            --color-pastel-bliss-3: #F8EDEB; /* Off-White/Lightest Pink (Background) */
            --color-pastel-bliss-4: #F9DCC4; /* Light Peach */
            --color-pastel-bliss-5: #FEC89A; /* Peach/Orange Tone (Accent) */
            
            /* Warna tambahan untuk teks dan tombol agar kontras */
            --color-text-dark: #5A4B4B; /* Darker tone for readability */
            --color-text-light: #8C7878; /* Muted tone for sub-text */
            --color-button-primary: #B2967D; /* Muted Brown, from previous design */
            --color-accent-strong: #ED3878; /* Deep Pink, from previous design */

            --font-display: 'Playfair Display', serif;
            --font-body: 'Quicksand', sans-serif;
        }

        /* --- Global Reset & Body --- */
        body {
            margin: 0; padding: 0;
            background-color: var(--color-pastel-bliss-3); /* F8EDEB */
            font-family: var(--font-body);
            color: var(--color-text-dark);
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        
        a { text-decoration: none; }

        /* --- HEADER & NAVIGASI --- */
        .header {
            position: fixed;
            top: 0; left: 0; right: 0;
            background-color: white; /* Header tetap putih agar elegan */
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.05);
            z-index: 1000;
        }

        .logo-container {
            /* Container untuk gambar logo */
            display: inline-block;
            height: 30px; /* Atur tinggi kontainer sesuai ukuran logo */
        }
        
        .logo-container img {
            height: 100%; /* Gambar akan mengisi tinggi kontainer */
            width: auto;
        }

        <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHISPERING FLORA - Temukan Bunga Impian Anda</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Variabel CSS untuk Palet Warna "Pastel Bliss" */
        :root {
            --color-pastel-bliss-1: #FFB5A7; /* Primer Pink */
            --color-pastel-bliss-2: #FCD5CE; /* Light Pink */
            --color-pastel-bliss-3: #F8EDEB; /* Off-White/Lightest Pink (Background) */
            --color-pastel-bliss-4: #F9DCC4; /* Light Peach */
            --color-pastel-bliss-5: #FEC89A; /* Peach/Orange Tone (Accent) */
            
            /* Warna tambahan untuk teks dan tombol agar kontras */
            --color-text-dark: #5A4B4B; /* Darker tone for readability */
            --color-text-light: #8C7878; /* Muted tone for sub-text */
            --color-button-primary: #B2967D; /* Muted Brown, from previous design */
            --color-accent-strong: #ED3878; /* Deep Pink, from previous design */

            --font-display: 'Playfair Display', serif;
            --font-body: 'Quicksand', sans-serif;
        }

        /* --- Global Reset & Body --- */
        body {
            margin: 0; padding: 0;
            background-color: var(--color-pastel-bliss-3); /* F8EDEB */
            font-family: var(--font-body);
            color: var(--color-text-dark);
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        
        a { text-decoration: none; }

        /* --- HEADER & NAVIGASI --- */
        .header {
            position: fixed;
            top: 0; left: 0; right: 0;
            background-color: var(--color-pastel-bliss-3); /* Header tetap putih agar elegan */
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.05);
            z-index: 1000;
        }

        .logo-container {
            display: inline-block;
            height: 30px; 
        }
        
        .logo-container img {
            height: 100%; 
            width: auto;
        }

        .nav a {
            margin-left: 25px;
            text-decoration: none;
            color: var(--color-text-dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav a:hover {
            color: var(--color-pastel-bliss-1); 
        }
        
        /* --- MODIFIKASI TOMBOL NAVIGASI (Login/Register) - DIPERBAIKI --- */
        .nav-button {
            padding: 10px 25px; 
            border-radius: 25px; 
            background-color: var(--color-button-primary); /* Warna dasar coklat */
            color: white !important;
            font-weight: 600;
            transition: all 0.4s ease-in-out; /* Transisi lebih alus */
            border: none; 
            position: relative; /* Penting untuk z-index teks */
            z-index: 1; /* Teks di atas background */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
            
            /* Background transisi baru */
            background-image: linear-gradient(
                45deg, 
                var(--color-pastel-bliss-5) 0%, /* Peach */
                var(--color-accent-strong) 50%, /* Deep Pink di tengah */
                var(--color-button-primary) 100% /* Coklat di akhir */
            );
            background-size: 200% 100%; /* Agar bisa digeser */
            background-position: right bottom; /* Mulai dari kanan (yang coklat) */
        }
        
        .nav-button:hover {
            background-position: left bottom; /* Geser ke kiri saat hover (muncul gradient pink) */
            color: white !important; 
            transform: translateY(-2px); 
            box-shadow: 0 8px 20px rgba(var(--color-accent-strong), 0.4); 
        }
        /* --- HERO SECTION --- */

        

        .hero {
            background: url('{{ asset("images/bg.jpg") }}') no-repeat center center; 
            background-size: cover;
            padding-top: 80px; 
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            /* Kita gunakan overlay dengan warna latar belakang Anda dan sedikit transparan */
            background: rgba(var(--color-pastel-bliss-3), 0.3); /* Atau rgba(0,0,0,0.3) untuk efek gelap */
            /* filter: blur(2px); */ /* Opsional: Untuk membuat gambar latar belakang sedikit blur */
        }

        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 800px;
            
            /* --- MODIFIKASI: KOTAK PUTIH AGAK TRANSPARAN DI BELAKANG TEXT --- */
            background-color: rgba(255, 255, 255, 0.75); /* Background putih semi-transparan (75% opaque) */
            padding: 50px; /* Tambahkan padding agar teks tidak terlalu mepet tepi kotak */
            border-radius: 20px; /* Sudut membulat untuk kotak */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Tambahkan shadow untuk efek mengangkat */
            /* --- AKHIR MODIFIKASI --- */
        }

        .hero-content h1 {
            font-family: var(--font-display);
            font-size: 56px;
            margin-bottom: 10px;
            color: var(--color-accent-strong); /* Deep Pink */
        }

        .hero-content p {
            font-size: 20px;
            color: var(--color-text-dark);
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .hero-content .cta-button {
            padding: 15px 35px; 
            border-radius: 30px; 
            color: white;
            text-decoration: none;
            font-weight: 700;
            font-size: 18px;
            
            /* Warna dasar dan transisi untuk warna */
            background-color: var(--color-pastel-bliss-1); /* Pink Primer */
            transition: all 0.3s ease-in-out; 
            
            position: relative; 
            overflow: hidden; /* **PENTING** untuk efek kilauan */
            z-index: 1;
            border: none; 
            
            display: inline-flex; 
            align-items: center; 
            gap: 10px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
        }

        /* BARU: Pseudo-element untuk Efek Kilauan (Shine/Swoosh) */
        .hero-content .cta-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%; /* Mulai dari luar kiri */
            width: 25px; /* Lebar kilauan */
            height: 100%;
            transform: skewX(-20deg); /* Miringkan kilauan */
            
            /* Gradient putih untuk efek kilauan */
            background: rgba(255, 255, 255, 0.4); 
            
            transition: left 1.0s ease-in-out;
            z-index: 2; /* Pastikan di atas warna background */
        }

        .hero-content .cta-button:hover {
            /* Perubahan warna saat hover menjadi Deep Pink */
            background-color: var(--color-accent-strong); 
            
            color: white; 
            box-shadow: 0 8px 25px rgba(237, 56, 120, 0.4); /* Shadow baru (Deep Pink RGBA) */
            transform: translateY(-2px); 
        }

        /* BARU: Animasi kilauan saat hover */
        .hero-content .cta-button:hover::after {
            left: 100%; /* Geser ke kanan hingga keluar tombol */
        }

        /* Efek untuk ikon saat hover pada tombol */
        .hero-content .cta-button i {
            font-size: 1.1em; 
            transition: transform 0.3s ease-in-out; 
        }

        .hero-content .cta-button:hover i {
            transform: translateX(5px); 
        }

        /* --- SECTION FITUR/PRODUK --- */
        .section {
            padding: 80px 50px;
            text-align: center;
        }
        
        .section-title {
            font-family: var(--font-display);
            font-size: 36px;
            color: var(--color-text-dark);
            margin-bottom: 50px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: left;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-family: var(--font-display);
            color: var(--color-accent-strong); /* Deep Pink */
            margin-top: 0;
            font-size: 22px;
        }

        .product-info .price {
            font-size: 20px;
            font-weight: 700;
            color: var(--color-button-primary); /* Muted Brown */
            margin-top: 10px;
        }
        
        /* --- FOOTER --- */
        .footer {
            background-color: var(--color-pastel-bliss-2); /* FCD5CE */ 
            color: var(--color-text-dark);
            padding: 20px 50px;
            text-align: center;
            font-size: 14px;
        }
        
        .footer a {
            color: var(--color-text-dark);
            text-decoration: none;
            margin: 0 10px;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
            }
            .nav {
                display: none; 
            }
            .hero {
                height: 60vh;
            }
            .hero-content h1 {
                font-size: 40px;
            }
            .hero-content p {
                font-size: 16px;
            }
            .section {
                padding: 50px 20px;
            }
        }
    </style>
</head>
<body>

    <header class="header">
        <a href="/" class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Whispering Flora Logo">
        </a>
        <nav class="nav">
            <a href="#katalog">Katalog</a>
            <a href="#about">Tentang Kami</a>
            
            <a href="{{ route('login') }}" class="nav-button">Login/Register</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Temukan Makna Tersembunyi di Setiap Helai Bunga.</h1>
                <p>Koleksi Bunga Pilihan Terbaik, Dirangkai dengan Sentuhan Hati dari Whispering Flora.</p>
                <a href="#katalog" class="cta-button">Lihat Koleksi Kami</a>
            </div>
        </section>
        
        <section class="section" id="katalog">
            <h2 class="section-title">Bunga Pilihan Mingguan</h2>
            <div class="product-grid">
                
                {{-- CARD SIMULASI PRODUK 1 --}}
                <div class="product-card">
                    {{-- Pastikan gambar-gambar ini ada di public/images/ --}}
                    <img src="{{ asset('images/babybreath.jpg') }}" alt="Baby's Breath">
                    <div class="product-info">
                        <h3>Baby's Breath Flower</h3>
                        <p style="color: var(--color-text-light); font-size: 14px;">Baby's Breath memiliki Simbol Cinta Abadi, Kemurnian, dan Kekuatan.</p>
                        <p class="price">Rp 50.000</p>
                    </div>
                </div>

                {{-- CARD SIMULASI PRODUK 2 --}}
                <div class="product-card">
                    <img src="{{ asset('images/helleborus.jpg') }}" alt="Helleborus">
                    <div class="product-info">
                        <h3>Helleborus Flower</h3>
                        <p style="color: var(--color-text-light); font-size: 14px;">Bunga Helleborus sering dianggap sebagai simbol kedamaian dan ketenangan.</p>
                        <p class="price">Rp 80.000</p>
                    </div>
                </div>
                
                {{-- CARD SIMULASI PRODUK 3 --}}
                <div class="product-card">
                    <img src="{{ asset('images/minicymbidium.jpg') }}" alt="Mini Cymbidium">
                    <div class="product-info">
                        <h3>Mini Cymbidium Flower</h3>
                        <p style="color: var(--color-text-light); font-size: 14px;">Cymbidium secara umum melambangkan cinta, kemewahan, dan keindahan yang langka.</p>
                        <p class="price">Rp 40.000</p>
                    </div>
                </div>

            </div>
            
            <a href="{{ route('login') }}" class="cta-button" style="margin-top: 50px; display: inline-block;">Lihat Semua Produk &raquo;</a>
        </section>
        
        <section class="section" id="about" style="background-color: var(--color-pastel-bliss-4); padding: 60px 50px;">
            <h2 class="section-title" style="margin-bottom: 20px;">Tentang Whispering Flora</h2>
            <p style="max-width: 700px; margin: 0 auto 30px; font-size: 16px; color: var(--color-text-dark);">
                Kami percaya bahwa setiap bunga memiliki cerita dan pesan tersembunyi. Whispering Flora berdedikasi untuk memilih hanya bunga-bunga dengan kualitas terbaik, merangkainya dengan sentuhan hati agar pesan Anda tersampaikan dengan sempurna. Kami menyediakan sistem penjualan sederhana dengan fokus pada kemudahan pengelolaan data dan pengalaman pengguna yang lancar.
            </p>
            <p style="font-style: italic; font-weight: 500; color: var(--color-accent-strong);">
                "Biar bunga yang bicara, saat kata tak lagi cukup."
            </p>
        </section>
        
    </main>

    <footer class="footer">
        &copy; {{ date('Y') }} Whispering Flora. Hak Cipta Dilindungi.
        <div>
            <a href="#">Kebijakan Privasi</a> | 
            <a href="#">Syarat & Ketentuan</a> |
            <a href="#">Kontak Kami</a>
        </div>
    </footer>

</body>
</html>