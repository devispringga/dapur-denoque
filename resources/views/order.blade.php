@extends('layouts.app')

@section('title', 'Order Produk')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Order: {{ ucwords(str_replace('_', ' ', $product)) }}</h2>

    {{-- Tampilkan gambar --}}
    <div class="text-center mb-4">
        <img src="{{ asset('assets/images/' . $product . '.jpg') }}" alt="{{ $product }}" class="img-fluid" style="max-height: 300px;">
    </div>

    {{-- Tampilkan pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('order.submit', ['product' => $product]) }}">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Pengiriman</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Pesanan</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
    </form>
</div>
@endsection
