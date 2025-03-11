<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk.index');
})->name('produk_produk');

Route::get('/barang', function () {
    return view('barang.barang');
})->name('barang_barang');

Route::get('/jasa', function () {
    return view('jasa.jasa');
})->name('jasa_jasa');

Route::get('/pelayanan', function () {
    return view('pelayanan.pelayanan');
})->name('pelayanan_pelayanan');

Route::get('/payment', function () {
    return view('payment.payment');
})->name('payment_payment');

Route::get('/perusahaan', function () {
    return view('perusahaan.perusahaan');
})->name('perusahaan_perusahaan');