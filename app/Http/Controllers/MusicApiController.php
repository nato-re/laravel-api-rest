<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $musics = Music::all();    
    
        return $musics;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'artist' => 'required|string',
            'album' => 'string',
            'duration' => 'integer',
        ]);
        $music = Music::create($validated);    
    
        return response()->json($music, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        return $music;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Music $music)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'artist' => 'required|string',
            'album' => 'string',
            'duration' => 'integer',
        ]);

        $music->update($validated);
        return $music;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $music = Music::findOrFail($id);
        $music->delete();
        return response()->noContent();
    }
}
