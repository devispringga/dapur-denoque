@extends('layouts.app')

@section('title', 'Menu Utama - Dapur Denoque')

@section('content')
    <h1 class="text-center">Selamat Datang di Dapur Denoque</h1>
    <p class="text-center">
        Dapur Denoque adalah UMKM di bidang kuliner yang menyediakan berbagai makanan cepat saji yang sehat dan lezat,
        termasuk rice bowl dengan variasi ayam rendang, ayam katsu, dan ayam sewir.
        Kami menyediakan berbagai ukuran porsi dengan harga yang terjangkau.
        Kami selalu berkomitmen untuk memberikan makanan yang bergizi, lezat, dan siap saji.
    </p>

    <h2 class="text-center mt-5">Lapar..? Izinkan Kami Mengatasinya !</h2>
    <div class="row mt-4">
        <!-- Rice Bowl Ayam Rendang -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_rendang.jpg') }}" class="card-img-top" alt="Rice Bowl Ayam Rendang">
                <div class="card-body">
                    <h5 class="card-title">Rice Bowl Ayam Rendang</h5>
                    <p class="card-text">Ayam Rendang yang dimasak dengan bumbu khas Indonesia, disajikan dengan nasi hangat dalam porsi yang pas untuk makan siang atau malam.</p>
                    <p class="card-text"><strong>Harga:</strong> Rp 15.000</p>
                    <a href="{{ route('order', ['product' => 'ayam_rendang']) }}" class="btn btn-success mt-2">Order Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Rice Bowl Ayam Katsu -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_katsu.jpg') }}" class="card-img-top" alt="Rice Bowl Ayam Katsu">
                <div class="card-body">
                    <h5 class="card-title">Rice Bowl Ayam Katsu</h5>
                    <p class="card-text">Ayam Katsu yang digoreng crispy, disajikan dengan nasi dan sayuran segar, cocok untuk Anda yang menyukai makanan gurih dan renyah.</p>
                    <p class="card-text"><strong>Harga:</strong> Rp 12.500</p>
                    <a href="{{ route('order', ['product' => 'ayam_katsu']) }}" class="btn btn-success mt-2">Order Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Rice Bowl Ayam Sewir -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_sewir.jpg') }}" class="card-img-top" alt="Rice Bowl Ayam Sewir">
                <div class="card-body">
                    <h5 class="card-title">Rice Bowl Ayam Sewir</h5>
                    <p class="card-text">Ayam Sewir yang dimasak dengan rempah pilihan, disajikan dengan nasi dan sayuran, sangat cocok untuk menu makan sehat dan bergizi.</p>
                    <p class="card-text"><strong>Harga:</strong> Rp 10.000</p>
                    <a href="{{ route('order', ['product' => 'ayam_Sewir']) }}" class="btn btn-success mt-2">Order Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
