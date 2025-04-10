<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('index');
})->name('home');

Auth::routes();


//Route::get('/login', function () {
//    return view('login');
//})->name('login');

//Route::get('/register', function () {
//    return view('register');
//})->name('register');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/detail/{product}', function ($product) {
    return view('detail', ['product' => $product]);
})->name('detail');

// Kalau kamu punya dashboard:
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/order/{product}', function ($product) {
    return view('order', ['product' => $product]);
})->name('order');

Route::post('/order/{product}', function (Request $request, $product) {
    // Simpan data order ke log/array/session (simulasi)
    // Bisa diganti nanti kalau pakai database
    // Untuk sekarang hanya tampilkan pesan sukses

    return redirect()->back()->with('success', 'Pesanan Anda berhasil dikirim!');
})->name('order.submit');

//Route::middleware(['auth'])->group(function () {
//    Route::get('/menu', function () {
//        return view('menu');
//    })->name('menu');

//    Route::get('/detail/{product}', function ($product) {
//        return view('detail', ['product' => $product]);
//    })->name('detail');

//    Route::get('/order/{product}', function ($product) {
//        return view('order', ['product' => $product]);
//    })->name('order');
//});
