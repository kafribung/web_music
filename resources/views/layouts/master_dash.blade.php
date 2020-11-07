<!doctype html>
<html lang="en">
<head>
    <title>{{ $title ?? 'Dashboard' }}</title>
    @include('includes.meta_dash')
    @include('includes.css_dash')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        {{-- Berpikiri kritis, Menyimak, membaca, menulis, mengajar, menjadi teladan --}}
        {{-- Header --}}
        @include('layouts.master_header')
        <div class="app-main">
            {{-- Sidebar --}}
            @include('layouts.master_sidebar')
            <div class="app-main__outer">
            {{-- Content --}}
            @yield('content')
            {{-- Footer --}}
            @include('layouts.master_footer')
            </div>
        </div>
    </div>
    @include('includes.script_dash')
</body>

</html>
