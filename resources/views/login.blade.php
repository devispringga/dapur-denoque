@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>

            <!-- Form Login -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-dark w-100">Masuk</button>
            </form>

            <p class="mt-3 text-center">Belum punya akun? <a href="{{ route('register') }}">Registrasi</a></p>
        </div>
    </div>
@endsection
