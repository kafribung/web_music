<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">

            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="/dashboard" class="{{ Request::is('dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard Saya
                    </a>
                </li>
                <li class="app-sidebar__heading">Akses Kontrol</li>
                <li>
                    <a href="" class="{{ Request::segment(1) ==  'bands' || Request::segment(1) ==  'bands/*'  ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Bands
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('bands.index') }}">
                                <i class="metismenu-icon"></i>
                                All Band
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('bands.create') }}">
                                <i class="metismenu-icon"></i>
                                Create Band
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="{{ Request::segment(1) ==  'albums' || Request::segment(1) ==  'albums/*'  ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Albums
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('albums.index') }}">
                                <i class="metismenu-icon">
                                </i>All Album
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('albums.create') }}">
                                <i class="metismenu-icon">
                                </i>Create Album
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('lirics.index') }}" class="{{ request()->segment(1) == 'lirics' ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Lirics
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>