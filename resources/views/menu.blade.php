@extends('layouts.app')

@section('title', 'Menu Utama')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Selamat Datang di Dapur Denoque</h1>
    <p class="text-center">
        Dapur Denoque adalah UMKM di bidang kuliner yang menyediakan berbagai makanan cepat saji yang sehat dan lezat,
        termasuk rice bowl dengan variasi ayam rendang, ayam katsu, dan ayam sewir.
    </p>

    <h2 class="text-center mt-5">Lapar..? Izinkan Kami Mengatasinya!</h2>

    <div class="row mt-4">
        <!-- Rice Bowl Ayam Rendang -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('assets/images/ayam_rendang.jpg') }}" class="card-img-top" alt="Ayam Rendang">
                <div class="card-body">
                    <h5 class="card-title">Rice Bowl Ayam Rendang</h5>
                    <p class="card-text">
                        Ayam Rendang dengan bumbu khas Indonesia, disajikan dengan nasi hangat. Cocok untuk makan siang atau malam.
                    </p>
                    <p><strong>Harga:</strong> Rp 15.000</p>
                    <p><strong>Harga:</strong> Rp 15.000</p>
                    <a href="{{ route('detail', ['product' => 'ayam_rendang']) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ route('order', ['product' => 'ayam_rendang']) }}" class="btn btn-success mt-2">Order Sekarang</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
