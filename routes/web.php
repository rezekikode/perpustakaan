<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('anggota')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\AnggotaController@index')->name('anggota.index');
        Route::get('create', 'App\Http\Controllers\AnggotaController@create')->name('anggota.create');
        Route::post('store', 'App\Http\Controllers\AnggotaController@store')->name('anggota.store');
        Route::get('edit/{anggota}', 'App\Http\Controllers\AnggotaController@edit')->name('anggota.edit');
        Route::put('update/{anggota}', 'App\Http\Controllers\AnggotaController@update')->name('anggota.update');
        Route::delete('destroy/{anggota}', 'App\Http\Controllers\AnggotaController@destroy')->name('anggota.destroy');
    });

Route::prefix('buku')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\BukuController@index')->name('buku.index');
        Route::get('create', 'App\Http\Controllers\BukuController@create')->name('buku.create');
        Route::post('store', 'App\Http\Controllers\BukuController@store')->name('buku.store');
        Route::get('edit/{buku}', 'App\Http\Controllers\BukuController@edit')->name('buku.edit');
        Route::put('update/{buku}', 'App\Http\Controllers\BukuController@update')->name('buku.update');
        Route::delete('destroy/{buku}', 'App\Http\Controllers\BukuController@destroy')->name('buku.destroy');
    });

Route::prefix('penulis')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\PenulisController@index')->name('penulis.index');
        Route::get('create', 'App\Http\Controllers\PenulisController@create')->name('penulis.create');
        Route::post('store', 'App\Http\Controllers\PenulisController@store')->name('penulis.store');
        Route::get('edit/{penulis}', 'App\Http\Controllers\PenulisController@edit')->name('penulis.edit');
        Route::put('update/{penulis}', 'App\Http\Controllers\PenulisController@update')->name('penulis.update');
        Route::delete('destroy/{penulis}', 'App\Http\Controllers\PenulisController@destroy')->name('penulis.destroy');
    });

Route::prefix('penerbit')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\PenerbitController@index')->name('penerbit.index');
        Route::get('create', 'App\Http\Controllers\PenerbitController@create')->name('penerbit.create');
        Route::post('store', 'App\Http\Controllers\PenerbitController@store')->name('penerbit.store');
        Route::get('edit/{penerbit}', 'App\Http\Controllers\PenerbitController@edit')->name('penerbit.edit');
        Route::put('update/{penerbit}', 'App\Http\Controllers\PenerbitController@update')->name('penerbit.update');
        Route::delete('destroy/{penerbit}', 'App\Http\Controllers\PenerbitController@destroy')->name('penerbit.destroy');
    });

Route::prefix('petugas')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\PetugasController@index')->name('petugas.index');
        Route::get('create', 'App\Http\Controllers\PetugasController@create')->name('petugas.create');
        Route::post('store', 'App\Http\Controllers\PetugasController@store')->name('petugas.store');
        Route::get('edit/{petugas}', 'App\Http\Controllers\PetugasController@edit')->name('petugas.edit');
        Route::put('update/{petugas}', 'App\Http\Controllers\PetugasController@update')->name('petugas.update');
        Route::delete('destroy/{petugas}', 'App\Http\Controllers\PetugasController@destroy')->name('petugas.destroy');
    });

Route::prefix('peminjaman')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\PeminjamanController@index')->name('peminjaman.index');
        Route::get('create', 'App\Http\Controllers\PeminjamanController@create')->name('peminjaman.create');
        Route::post('store', 'App\Http\Controllers\PeminjamanController@store')->name('peminjaman.store');
        Route::get('edit/{peminjaman}', 'App\Http\Controllers\PeminjamanController@edit')->name('peminjaman.edit');
        Route::put('update/{peminjaman}', 'App\Http\Controllers\PeminjamanController@update')->name('peminjaman.update');
        Route::delete('destroy/{peminjaman}', 'App\Http\Controllers\PeminjamanController@destroy')->name('peminjaman.destroy');
    });

Route::prefix('pengembalian')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\PengembalianController@index')->name('pengembalian.index');
        Route::get('create', 'App\Http\Controllers\PengembalianController@create')->name('pengembalian.create');
        Route::post('store', 'App\Http\Controllers\PengembalianController@store')->name('pengembalian.store');
        Route::get('edit/{pengembalian}', 'App\Http\Controllers\PengembalianController@edit')->name('pengembalian.edit');
        Route::put('update/{pengembalian}', 'App\Http\Controllers\PengembalianController@update')->name('pengembalian.update');
        Route::delete('destroy/{pengembalian}', 'App\Http\Controllers\PengembalianController@destroy')->name('pengembalian.destroy');
    });

Route::prefix('denda')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\DendaController@index')->name('denda.index');
        Route::get('create', 'App\Http\Controllers\DendaController@create')->name('denda.create');
        Route::post('store', 'App\Http\Controllers\DendaController@store')->name('denda.store');
        Route::get('edit/{denda}', 'App\Http\Controllers\DendaController@edit')->name('denda.edit');
        Route::put('update/{denda}', 'App\Http\Controllers\DendaController@update')->name('denda.update');
        Route::delete('destroy/{denda}', 'App\Http\Controllers\DendaController@destroy')->name('denda.destroy');
    });


require __DIR__.'/auth.php';
