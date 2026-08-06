<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musics = Music::all();
        return view("musics.index", compact("musics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("musics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $music = Music::create([
            "name"=> $request->name,
            "artist" => $request->artist,
            "album" => $request->album,
            "duration" => $request->duration,

        ]);
        return redirect()->route("musics.index")->with("success","Musica $music->name com Sucesso");
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $music = Music::findOrFail($id);
    //     return view("musics.show", compact("music"));
    // }

    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $music = Music::findOrFail($id);
        $param = ['music' => $music];
        $param = compact("music");

        return view("musics.show", compact("music"));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        //
    }
}
