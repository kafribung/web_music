@extends('layouts.master_dash')
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
                    <form action="{{ route('band.store') }}" enctype="multipart/form-data">
                        <div class="position-relative form-group">
                            <label for="email" class="">Img</label>
                            <input name="img" id="email" placeholder="input your img" type="file" class="form-control" autofocus>
                            @error('img')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="position-relative form-group">
                            <label for="band" class="">Name</label>
                            <input name="name" id="band" placeholder="band" type="text" class="form-control">
                            @if ($errors)
                                {{ $errors->first('name') }}
                            @endif
                        </div>
                        <div class="position-relative form-group">
                            <label for="genre" class="">Genre</label>
                            <select multiple  name="genre[]" id="genre" class="form-control genre">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="float-right mt-1 btn btn-primary">Store</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('css_select_two')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('script_select_two')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.genre').select2();
        });
    </script>
@endpush    
@endsection