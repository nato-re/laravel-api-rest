<?php

use App\Http\Controllers\MusicController;
use App\Models\Music;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return "view('welcome')";
});

Route::get('/users', function () {
    $users = User::all();

    return $users;
});

Route::get('/musics', function () {
    $musics = Music::all();

    return view('musics.index', compact('musics'));
});

Route::get('/musics/create', function () {

    return view('musics.create');
});

Route::post('/musics', [MusicController::class, 'store']);

Route::post('/create-test-music', function (Request $request) {
    $music_data = [
        'name' => 'What to do',
        'artist' => 'Vanusa',
        'album' => 'Vanusa',
        'duration' => 226,
    ];
    Music::create($music_data);    

    return redirect('/musics');
});

