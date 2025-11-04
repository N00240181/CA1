<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Album $album)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'runtime' => 'required|string|max:10',
            'artist' => 'required|string|max:255',
            'release_date' => 'required|date',
            'album_id' => 'nullable|exists:albums,id',
        ]);
        
        $album->songs()->create([
            'track_number' => $request->input('track_number'),
            'name' => $request->input('name'),
            'runtime' => $request->input('runtime'),
            'artist' => $request->input('artist'),
            'release_date' => $request->input('release_date'),
        ]);

        return redirect()->route('albums.show', $album)->with('success', 'Song added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
