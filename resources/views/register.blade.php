@extends('layouts.app')

@section('title', 'Daftar Akun')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Form Pendaftaran</h2>
    <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="Ulangi kata sandi">
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
@endsection
