<?php

namespace App\Http\Controllers\Backend;

use App\Models\Band;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AlbumRequest;
use App\Models\Album;
use Illuminate\Cache\RedisTaggedCache;

class AlbumController extends Controller
{
    // Read
    public function index()
    {
        $albums = Album::with('band')->latest()->get();
        return view('backend.album', compact('albums'));
    }

    // Create
    public function create()
    {
        $bands = Band::latest()->get();
        return view('backend_create.album_create', compact('bands'));
    }

    // Store
    public function store(AlbumRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = \Str::slug($request->name);
        if (Album::where('slug', $data['slug'])->first() != null) {
            $data['slug'] .= time();
        }
        Album::create($data);
        return redirect('/albums')->with('msg', 'album successfully add');
    }

    // Show
    public function show($id)
    {
        return abort('404');
    }

    // Edit
    public function edit(Album $album)
    {
        $bands = Band::latest()->get();
        return view('backend_edit.album_edit', compact('album', 'bands'));
    }

    // / Update
    public function update(AlbumRequest $request, Album $album)
    {
        $data = $request->validated();
        $data['slug'] = \Str::slug($request->name);
        if (Album::where('slug', $data['slug'])->first() != null) {
            $data['slug'] .= time();
        }
        $album->update($data);
        return redirect('/albums')->with('msg', 'album successfully edit');
    }

    // Destroy
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();
    }
}
