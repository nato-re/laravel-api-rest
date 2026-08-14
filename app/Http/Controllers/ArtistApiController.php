<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return $artists;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'string|url|nullable',
            'start_year' => 'integer|min:1900',
        ]);
        $artist = Artist::create($validated);    
    
        return response()->json($artist, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::findOrFail($id);
        return $artist;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artist = Artist::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'string|url|nullable',
            'start_year' => 'integer|min:1900',
        ]);
        $artist->update($validated);
        return $artist;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return $artist;
    }
}
