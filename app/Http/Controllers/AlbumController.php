<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    /* OLD CODE -> public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    } */

    /* This function is used for the search functionality and displaying the albums
    as cards on the index page. The if statement means if a search exists then it will
    return the albums which contain the string provided in the search box. If it isn't
    being used then it'll display all of the albums instead. */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        if ($search) {
            $albums = Album::where('name', 'like', '%' . $search . '%')->get();
        }
        else {
            $albums = Album::all();
        }
    
        return view('albums.index', compact('albums'));
    }

    /* This function returns the album create view. */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('albums.index')->with('error', 'Access denied.');
        }
        return view('albums.create');
    }

    /* This function stores the data sent in the create view. It takes in the requests
    sent by the user and checks if it passes the form validation. I have a few different
    requirements like certain image types, for the wikipedia entry to be a real url,
    and for the date to be an actual date. When uploading images it changes the image
    name to a string of numbers corresponding to the time of uploading, this avoids
    the chance of uploading 2 images with the same name. It then moves it to the
    public/images/albums folder where all images are stored. After that it creates the
    details of the album such as name, runtime, etc. Finally, it sends the user back 
    to the index page with a success alert. */
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

    /* This function returns the show view which displays the album's details. */
    public function show(Album $album)
    {
        $album->load('songs');

        return view('albums.show', compact('album'));
    }

    /* This function returns the edit view which allows the user to edit the album. */
    public function edit(Album $album)
    {
        return view('albums.edit')->with('album', $album);
    }

    /* This function is like the store function, where it takes in the request
    and uses it to update the details of the album. It's pretty much the same,
    however I made it so the album_cover can be nullable which means if you
    don't change the image it won't cause an error it'll continue to use the
    old image. */
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

    /* This function deletes the selected album using the delete function, which
    in turn removes it from the database. */
    public function destroy(Album $album)
    {
        $album->delete();

        return to_route('albums.index')->with('success', 'Album deleted successfully!');
    }
}
