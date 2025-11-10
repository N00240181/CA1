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
public function store(Request $request)
{
    $validated = $request->validate([
        'track_number' => 'required|integer',
        'name' => 'required|string|max:255',
        'runtime' => 'required|string|max:10',
        'artist' => 'required|string|max:255',
        'release_date' => 'required|date',
        'album_id' => 'required|exists:albums,id',
    ]);

    $album = Album::find($validated['album_id']);

    if (!$album) {
        return redirect()->back()->withErrors(['album_id' => 'Selected album does not exist.']);
    }

    $album->songs()->create([
        'track_number' => $validated['track_number'],
        'name' => $validated['name'],
        'runtime' => $validated['runtime'],
        'artist' => $validated['artist'],
        'release_date' => $validated['release_date'],
        'album_id' => $album->id,
    ]);

    return redirect()->route('albums.show', $album)
        ->with('success', 'Song added successfully.');
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
        $user = auth()->user();

if (!$user || ($user->id !== $song->user_id && $user->role !== 'admin')) {
    return redirect()->route('albums.index')->with('error', 'Access denied.');
}

 return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $song->update($request->only(['track_number', 'name', 'artist', 'runtime', 'release_date']));

        return redirect()->route('albums.show', $song->album_id)
                         ->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return to_route('albums.index')->with('success', 'Song deleted successfully!');
    }
}
