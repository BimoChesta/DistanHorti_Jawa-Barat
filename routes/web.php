<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Tentang Kami
|--------------------------------------------------------------------------
*/

Route::view('/sejarah', 'pages.sejarah');
Route::view('/struktur-organisasi', 'pages.struktur');
Route::view('/tupoksi', 'pages.tupoksi');

/*
|--------------------------------------------------------------------------
| Informasi Publik
|--------------------------------------------------------------------------
*/

Route::view('/kontak-kami', 'pages.kontak');
Route::view('/dokumen-kinerja', 'pages.dokumen');
Route::view('/dokumen-detail', 'dokumen-detail');

/*
|--------------------------------------------------------------------------
| PPID
|--------------------------------------------------------------------------
*/

Route::view('/permohonan-informasi', 'pages.permohonan');

/*
|--------------------------------------------------------------------------
| Program
|--------------------------------------------------------------------------
*/

Route::view('/perda-organik', 'pages.perda');
