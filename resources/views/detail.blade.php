@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <h1 class="text-center">Detail Produk</h1>

    <div id="product-details" class="mt-4">
        @if ($product === 'ayam_katsu')
            <h3>Ayam Katsu</h3>
            <img src="{{ asset('assets/images/ayam_katsu.jpg') }}" class="img-fluid" alt="Ayam Katsu">
            <p>Ayam Katsu adalah salah satu produk unggulan kami...</p>

        @elseif ($product === 'ayam_rendang')
            <h3>Ayam Rendang</h3>
            <img src="{{ asset('assets/images/ayam_rendang.jpg') }}" class="img-fluid" alt="Ayam Rendang">
            <p>Ayam Rendang kami menggabungkan cita rasa pedas dan gurih...</p>

        @elseif ($product === 'ayam_sewir')
            <h3>Ayam Sewir</h3>
            <img src="{{ asset('assets/images/ayam_sewir.jpg') }}" class="img-fluid" alt="Ayam Sewir">
            <p>Kami meluncurkan Ayam Sewir...</p>

        @else
            <p>Informasi produk tidak ditemukan.</p>
        @endif
    </div>
@endsection
