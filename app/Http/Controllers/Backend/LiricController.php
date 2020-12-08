<?php

namespace App\Http\Controllers\Backend;

use App\Models\{Album,  Band, Liric};
use App\Http\Controllers\Controller;

class LiricController extends Controller
{
    // READ
    public function index()
    {
        $lirics = Liric::with('band', 'album')->orderBy('id', 'desc')->get(['title', 'body', 'slug', 'album_id', 'band_id']);
        return view('backend.liric', compact('lirics'));
    }

    // CREATE
    public function create()
    {
        $bands = Band::get(['id','name']);
        $albums= Album::get(['id', 'name']);
        return view('backend_create.liric_create', compact('bands', 'albums'));
    }

    // STORE
    public function store()
    {
        dd('ok');
    }

}
