<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class BandController extends Controller
{
    // Read
    public function index()
    {
        return 'sapi';
    }

    // Create
    public function create()
    {
        $genres =  Genre::get();
        return view('dashboard_create.band_create', compact('genres'));
    }

    // Store
    public function store(Request $request)
    {
        //
    }

    // Show
    public function show($id)
    {
        return abort('404');
    }

    // Edit
    public function edit($id)
    {
        //
    }

    // / Update
    public function update(Request $request, $id)
    {
        //
    }

    // Destroy
    public function destroy($id)
    {
        //
    }
}
