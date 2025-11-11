<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

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
    
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('artists.index')->with('error', 'Access denied.');
        }
        return view('artists.create');
    }

    public function store(Request $request)
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

        Artist::create([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'description' => $request->description,
            'picture_url' => $request->picture_url,
        ]);

        return to_route('artists.index')->with('success', 'Artist created successfully!');
    }

    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        return view('artists.edit')->with('artist', $artist);
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
 
        return to_route('artists.index')->with('success', 'Artist updated successfully!');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return to_route('artists.index')->with('success', 'Artist deleted successfully!');
    }
}
