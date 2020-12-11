<?php

namespace App\Http\Controllers\Backend;

use App\Models\{Album,  Band, Liric};
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LiricRequest;
use Illuminate\Http\Request;

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
    public function store(LiricRequest $request)
    {
        try {
            $data = $request->validated();
            $data['band_id'] = $request->band;
            $data['album_id'] = $request->album;
            $data['slug'] = \Str::slug($request->title) ;
            Liric::create($data);
            return response(['msg' => 'The liric was created successfully'], 201);
        } catch (\Throwable $th) {
            return response(['msg' => $th->getMessage()], 400);
        }
    }

}
