@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
    <h1 class="text-center">Selamat Datang di Website Dapur Denoque</h1>
    <p class="text-center">Dapur Denoque menyediakan berbagai makanan cepat saji yang sehat dan lezat dengan kemasan rice bowl berbagai ukuran dengan harga terjangkau</p>

    <div class="row mt-4">
        <!-- Kartu Informasi 1 (Ayam Katsu) -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_katsu.jpg') }}" class="card-img-top" alt="Ayam Katsu">
                <div class="card-body">
                    <h5 class="card-title">Pencapaian Dapur Denoque</h5>
                    <p class="card-text">
                        Dapur Denoque berhasil mencapai target produksi tertinggi tahun ini dengan produk Ayam Katsu, yang menjadi favorit pelanggan.
                    </p>
                    <a href="{{ url('/detail/ayam_katsu') }}" class="btn btn-outline-primary">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Kartu Informasi 2 (Ayam Rendang) -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_rendang.jpg') }}" class="card-img-top" alt="Ayam Rendang">
                <div class="card-body">
                    <h5 class="card-title">Penghargaan Dapur Denoque</h5>
                    <p class="card-text">
                        Kami menerima penghargaan sebagai perusahaan UMKM terbaik di bidang Kuliner, termasuk Ayam Rendang yang menggabungkan cita rasa tradisional.
                    </p>
                    <a href="{{ url('/detail/ayam_rendang') }}" class="btn btn-outline-primary">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Kartu Informasi 3 (Ayam Sewir) -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_sewir.jpg') }}" class="card-img-top" alt="Ayam Sewir">
                <div class="card-body">
                    <h5 class="card-title">Varian Baru</h5>
                    <p class="card-text">
                        Kami menghadirkan varian baru Ayam Sewir, sebuah produk baru yang menawarkan pilihan ayam berbumbu dengan cara penyajian yang praktis dan lezat.
                    </p>
                    <a href="{{ url('/detail/ayam_sewir') }}" class="btn btn-outline-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
