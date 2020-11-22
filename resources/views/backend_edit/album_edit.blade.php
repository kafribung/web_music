@extends('layouts.master_dash', ['title' => 'Dashboard - Album update'])
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Album update
                    <div class="page-title-subheading">Edit data Album.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Controls Types</h5>
                    <form action="{{ route('albums.update', $album->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @php
                            $update = 'update'
                        @endphp
                        <x-backend.album_form :album="$album" :bands="$bands"  :button="$update"></x-backend.album_form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection