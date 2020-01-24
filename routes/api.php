<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('artikel','ArtikelApiController');

Route::apiResource('berita','BeritaApiController');

Route::apiResource('galeri','GaleriApiController');

Route::apiResource('pengumuman','pengumumanApiController');

Route::apiResource('kategori_artikel','KategoriArtikelApiController');

Route::apiResource('kategori_berita','KategoriBeritaApiController');

Route::apiResource('kategori_galeri','KategoriGaleriApiController');

Route::apiResource('kategori_pengumuman','KategoriPengumumanApiController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
