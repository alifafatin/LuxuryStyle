@extends('layout.main-landing')
@push('addCss')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endpush
@section('container')
    <section class="hero" id="Home">
        <main class="content">
            <div class="wrapper-kiri">
                <h1>Welcome To <span>Luxury</span>Style</h1>
                <p>
                    Butik ini berdiri pada tahun 1888, dan menjual berbagai style kekinian
                    gaya wanita. Kamu akan menemukan hal menarik disini!
                </p>
            </div>
            <div class="wrapper-foto">
                <img src="/img/LogoTransparan.png" alt="" style="height: 450px;">
            </div>
        </main>
    </section>

    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                @foreach ($tentangs as $tentang)
                    <img src="{{ asset('storage/' . $tentang->fototentang) }}" id="foto-produk" alt="Tentang Kami" />
                @endforeach
            </div>
            <div class="content">
                <h3>Kenapa Memilih Butik Kami?</h3>
                <p align="justify">
                    "Selamat datang di LuxuryStyle tempat utama untuk gaya wanita! Kami
                    menghadirkan koleksi baju wanita yang eksklusif dan terkini untuk
                    menemani gaya hidup anda, dengan berbagai pilihan dari gaya kasual
                    hingga elegan dan menggunakan bahan yang berkualitas tinggi.
                </p>
                <p align="justify">
                    Kami selalu memperbarui koleksi kami untuk memastikan anda selalu
                    tampil fashionable, tim kami selalu siap untuk membantu anda dalam
                    menemukan pilihan dan memberikan saran mode terbaik. Kami juga
                    menawarkan pengiriman cepat dan pilihan pembayaran yang nyaman.
                    Terimakasih telah memilih (nama toko) sebagai tujuan anda, dan kami
                    harap anda menikmati berbelanja di toko online kami!"
                </p>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="style.css" />
    <section id="menu" class="menu">
        <h2>Produk <span>Kami</span></h2>
        <p>Ini ada beberapa koleksi dress dari butik<span> Luxury</span>Style</p>
        <div class="row">
            @foreach ($product as $product)
                <div class="menu-card">
                    <img src="{{ asset('storage/' . $product->fotoproduk) }}" alt="Baju" class="menu-card-img" />
                    <h3 class="menu-card-title">- {{ $product->namabaju }}-</h3>
                    <p class="menu-card-price"> $ {{ $product->hargabaju }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section product" id="products">
        <h2>Produk Unggulan<span> Kami</span></h2>
        <p> Berikut produk unggulan <span>Luxury</span>Style</p>
        <div class="row">
            @foreach ($fotounggulans as $fotounggulan)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('storage/' . $fotounggulan->fotounggulan) }}" alt="Product 1">
                    </div>
                    <div class="product-content">
                        <h3> - {{ $fotounggulan->namabaju }} -</h3>
                        <p> {{ $fotounggulan->deskripsi }}
                        <div class="product-price"> $ {{ $fotounggulan->hargabajusesudah }} <span> $
                                {{ $fotounggulan->hargabajusebelum }}</span></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    </section>

    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>
            Jika anda mengalami kendala atau ingin memberi saran silahkan isi forum
            dibawah ini
        </p>
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2026736.138875535!2d107.22666057755542!3d-7.187200566398557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2! 1s0x2e7a577101d240f5%3A0x90bf121c194f9c81!2zRHV0YSBBbmRhbGFzKOqmo-qmuOqmoOqmhOqmpOqngOqmneqmreqmseqngCk!5e0!3m2!1sid!2sid!4v1695961391724!5m2!1sid!2sid"
                allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="/" method="POST">
                @csrf
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama" name="nama" />
                </div>

                <div class="input-group">   
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email" name="email" />
                </div>

                <div class="input-group">
                    <i data-feather="message-square"></i>
                    <input type="text" placeholder="Pesan" name="pesan" />
                </div>

                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    </div>

    <!-- Icons -->
    <script>
        feather.replace();
    </script>

    <!-- Js -->
    <script src="script.js"></script>
    </body>
@endsection

@push('addJs')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endpush
