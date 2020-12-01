@extends('layouts.master_dash', ['title' => 'Dashboard - Band Create'])
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Band Create
                    <div class="page-title-subheading">Creata data band.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Controls Types</h5>
                    <form action="{{ route('bands.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @php
                            $create = 'create'
                        @endphp
                        <x-backend.band_form :band="new App\Models\Band" :genres="$genres"  :button="$create"></x-backend.band_form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Selectwo --}}
<x-backend.selecttwo></x-backend.selecttwo>
@endsection 