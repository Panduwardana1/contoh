<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/request', function(Request $request) {

    $nama = request('nama');
    $nim = request('nim');
    $prodi = request('prodi');
    $alamat = request('alamat');

    return view('pandu', compact('nama', 'nim', 'prodi', 'alamat'));
});
