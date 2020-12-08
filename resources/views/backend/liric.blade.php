@extends('layouts.master_dash', ['title' => 'Dashboard - Liric'])
@section('content')
<div class="app-main__inner" id="app">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>liric
                    <div class="page-title-subheading"> All liric data.</div>
                </div>
            </div>
        </div>
    </div>
    @if (session('msg'))
    <div class="row">
        <p class="alert alert-success">{{  session('msg') }}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Table with hover</h5>
                    <liric-component :lirics="{{ json_encode($lirics) }}" :route-create="{{ json_encode(route('lirics.create')) }}"></liric-component>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script_vue')
    <script src="{{ asset('js/app.js') }}" defer></script>
@endpush
@push('script_sweetalert')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush
@stop