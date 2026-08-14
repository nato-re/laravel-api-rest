<?php

use App\Http\Controllers\ArtistApiController;
use App\Http\Controllers\AlbumApiController;
use App\Http\Controllers\MusicApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/musics', [MusicApiController::class, 'index']);
Route::post('/musics', [MusicApiController::class, 'store']);
Route::get('/musics/{music}', [MusicApiController::class, 'show']);
Route::delete('/musics/{id}', [MusicApiController::class, 'destroy']);
Route::put('/musics/{music}', [MusicApiController::class, 'update']);

Route::apiResource('/musics', MusicApiController::class);
Route::apiResource('/artists', ArtistApiController::class);
Route::apiResource('/albuns', AlbumApiController::class);
