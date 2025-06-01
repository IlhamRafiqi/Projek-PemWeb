<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/inventaris', function () {
    return view('inventaris-admin');
});

Route::get('/inventaris-guest', function () {
    return view('inventaris-guest');
});

Route::get('/tambah-barang', function () {
    return view('tambah-barang');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});