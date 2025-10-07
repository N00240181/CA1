<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'release_date' => 'required|date',
            'runtime' => 'required|integer',
            'album_url' => 'required|url',
            'album_cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'spotify_link' => 'required|string',
        ]);

        if ($request->hasFile('album_cover')) {
            $imageName = time().'.'.$request->album_cover->extension();
            $request->album_cover->move(public_path('images/albums'), $imageName);
        }

        Album::create([
            'name' => $request->name,
            'release_date' => $request->release_date,
            'runtime' => $request->runtime,
            'album_url' => $request->album_url,
            'album_cover' => $imageName,
            'spotify_link' => $request->spotify_link,
        ]);

        return to_route('albums.index')->with('success', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('albums.show')->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('albums.edit')->with('album', $album);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'release_date' => 'required|date',
            'runtime' => 'required|integer',
            'album_url' => 'required|url',
            'album_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'spotify_link' => 'required|string',
        ]);

        if ($request->hasFile('album_cover')) {
            $coverName = time().'.'.$request->album_cover->extension();
            $request->album_cover->move(public_path('images/albums'), $coverName);
            $album->album_cover = $coverName;
        }
        
        $album->update([
            'name' => $request->name,
            'release_date' => $request->release_date,
            'runtime' => $request->runtime,
            'album_url' => $request->album_url,
            'album_cover' => $album->album_cover,
            'spotify_link' => $request->spotify_link,
        ]);
 
        return to_route('albums.index')->with('success', 'Album updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return to_route('albums.index')->with('success', 'Album deleted successfully!');
    }
}
