@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Ingat Saya</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>

                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}">Lupa Password?</a><br>
                    <a href="{{ route('register') }}">Belum punya akun? Register</a>
                </div>
            </form>
            @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

        </div>
    </div>
</div>
@endsection
