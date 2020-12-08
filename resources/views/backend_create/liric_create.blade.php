@extends('layouts.master_dash', ['title' => 'Dashboard - Liric Create'])
@section('content')
<div class="app-main__inner" id="app">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Liric Create
                    <div class="page-title-subheading">Creata data liric.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Controls Types</h5>
                    <liric-create-component :bands="{{ json_encode($bands) }}" :albums="{{ json_encode($albums) }}"></liric-create-component>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script_vue')
    <script src="{{ asset('js/app.js') }}" defer></script>
@endpush
@endsection