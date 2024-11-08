@extends('layouts.frontend') 

@section('content')
<div class="container text-center">
    <!-- Nama Perusahaan dengan desain yang menarik -->
    <h2 class="section-title">BUTIK</h2>
    <h1 class="company-name">Alexandra Tenun</h1>
    <p class="tagline">Menghadirkan Pesona Tenun Tradisional dengan Sentuhan Modern</p>
    
    <!-- Tombol ajakan -->
    <a href="#" class="btn get-to-know">Get To Know Us</a>

    <!-- Periksa apakah pengguna sudah login atau belum -->
    @if(Auth::check())
        <!-- Tampilkan pesan sambutan untuk pengguna yang sudah login -->
        <p class="welcome-message">Selamat datang kembali, {{ Auth::user()->name }}!</p>
    @else
        <!-- Tampilkan opsi login atau registrasi jika pengguna belum login -->
        <div class="auth-options mt-4">
            <p class="auth-prompt">Silakan <a href="{{ route('login') }}">login</a> atau <a href="{{ route('register') }}">registrasi</a> untuk melihat produk lengkap kami dan menikmati penawaran spesial.</p>
        </div>
    @endif

    <!-- Bagian Pengenalan -->
    <div class="intro mt-4">
        <p>
            Selamat datang di Butik Alexandra Tenun, destinasi utama Anda untuk kain tenun berkualitas tinggi yang menggabungkan keindahan tradisional dan gaya modern. 
            Kami berdedikasi untuk menghadirkan koleksi tenun terbaik dari berbagai daerah di Indonesia, yang dibuat dengan tangan oleh pengrajin lokal yang ahli dan penuh dedikasi.
        </p>
        <div class="product-gallery mt-4">
            <img src="{{ asset('frontend/gambar/tenun.jpg') }}" alt="Tenun 1" class="product-image">
            <img src="{{ asset('frontend/gambar/tenun1.jpg') }}" alt="Tenun 2" class="product-image">
        </div>
    </div>
</div>
@endsection

<!-- CSS -->
<style>
    .section-title {
        font-size: 1.5rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 3px;
    }
    .company-name {
        font-size: 3rem;
        font-weight: bold;
        color: #343a40;
        margin-top: -10px;
        text-transform: uppercase;
        letter-spacing: 5px;
    }
    .tagline {
        font-size: 1.2rem;
        color: #495057;
        font-style: italic;
    }
    .btn.get-to-know {
        background-color: #007bff;
        color: #ffffff;
        padding: 10px 20px;
        text-transform: uppercase;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 15px;
        transition: background-color 0.3s;
    }
    .btn.get-to-know:hover {
        background-color: #0056b3;
    }
    .auth-options {
        font-size: 1rem;
        color: #6c757d;
    }
    .auth-options a {
        color: #007bff;
        text-decoration: underline;
    }
    .intro p {
        color: #5a5a5a;
        font-size: 1rem;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
    }
    .product-gallery {
        display: flex;
        justify-content: center;
        gap: 15px;
    }
    .product-image {
        width: 150px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }
    .product-image:hover {
        transform: scale(1.05);
    }
</style>
