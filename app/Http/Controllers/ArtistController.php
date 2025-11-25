<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        if ($search) {
            $artists = Artist::where('name', 'like', '%' . $search . '%')->get();
        }
        else {
            $artists = Artist::all();
        }
        
        /* $artists = Artist::with('albums')->get(); */
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('artists.index')->with('error', 'Access denied.');
        }

        $albums = Album::all();
        return view('artists.create', compact('albums'));
    }

    public function store(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'description' => 'required|string|max:65535',
            'picture_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture_url')) {
            $imageName = time().'.'.$request->picture_url->extension();
            $request->picture_url->move(public_path('images/artists'), $imageName);
        }

        $artist = Artist::create([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'description' => $request->description,
            'picture_url' => $imageName,
        ]);

        if ($request->has('albums')) {
            $artist->albums()->attach($request->albums);
        }

        return to_route('artists.index')->with('success', 'Artist created successfully!');
    }

    public function show(Artist $artist)
    {
        $artist->load('albums');
        return view('artists.show', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        /* $albums = Album::all(); */
        return view('artists.edit')->with('artist', $artist);
        $artistAlbums = $artist->albums->pluck('id')->toArray();
        return view('artists.edit', compact('artist', 'albums', 'artistAlbums'));
    }

    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'description' => 'required|string|max:65535',
            'picture_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture_url')) {
            $pictureName = time().'.'.$request->picture_url->extension();
            $request->picture_url->move(public_path('images/artists'), $pictureName);
            $artist->picture_url = $pictureName;
        }
        
        $artist->update([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'description' => $request->description,
            'picture_url' => $artist->picture_url,
        ]);

        if ($request->has('albums')) {
            $artist->albums()->sync($request->albums);
        }
 
        return to_route('artists.index')->with('success', 'Artist updated successfully!');
    }

    public function destroy(Artist $artist)
    /* This function */
    {
        $artist->albums()->detach();
        $artist->delete();

        return to_route('artists.index')->with('success', 'Artist deleted successfully!');
    }
}
