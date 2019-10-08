<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <h1>
                <img src="{{ asset('img/logo.jpg') }}" class="navbar-brand-img" alt="...">
                <span>SDM Polri</span>
            </h1>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">

                @if (Auth::user()->role == "operator")
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fab fa-laravel" style="color: #f4645f;"></i>
                            <span class="nav-link-text" >SDM</span>
                        </a>

                    <div class="collapse show" id="navbar-examples" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/inputtkj">{{ __('Input nilai TKJ') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/inputbela"> {{ __('Input nilai Beladiri') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/prestasii"> {{ __('Personel Prestasi') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/laporan">{{ __('Laporan') }}
                                </a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/rekom">
                                 {{ __('Rekom') }}
                            </a>
                        </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#binjaspol" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="binjaspol">
                        <i class="ni ni-planet text-blue" style="color: #f4645f;"></i>
                        <span class="nav-link-text">Binjaspol</span>
                    </a>

                    <div class="collapse show" id="binjaspol" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/profile">
                                    Struktur Orgaisasi Binjas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                    Tentang Binjas polri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                    Program Binjas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                    Regulasi
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#master" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="master">
                        <i class="ni ni-air-baloon text-green" style="color: #f4645f;"></i>
                        <span class="nav-link-text">Master Data</span>
                    </a>

                    <div class="collapse show" id="master" style="">
                        <ul class="nav nav-sm flex-column">
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#analisa" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="analisa">
                        <i class="ni ni-pin-3 text-orange" style="color: #f4645f;"></i>
                        <span class="nav-link-text">Analisa Data</span>
                    </a>

                    <div class="collapse show" id="analisa" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/profile">
                                Grafik Hasil TKJ Personel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                Grafik Hasil Uji Beladiri Polri Personel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                Grafik IMT Personel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                Grafik Personel Berprestasi
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#pencarian" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="pencarian">
                        <i class="ni ni-badge text-blue" style="color: #f4645f;"></i>
                        <span class="nav-link-text">Pencarian Data</span>
                    </a>

                    <div class="collapse show" id="pencarian" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/profile">
                                    Pencarian Data Hasil TKJ, Hasil BDP, IMT Perorangan, Keseluruhan, Mabes, Polda, Satker, Sub Satker, Polres, Pusdik/SPN
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                    Pencarian Personel Berprestasi, Putra/putri Polri Berprestasi
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#laporan" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="laporan">
                        <i class="ni ni-books text-pink"></i>
                        <span class="nav-link-text">Laporan</span>
                    </a>

                    <div class="collapse show" id="laporan" style="">
                        <ul class="nav nav-sm flex-column">
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#berita" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="berita">
                        <i class="ni ni-books text-pink"></i>
                        <span class="nav-link-text">Berita Terkini</span>
                    </a>

                    <div class="collapse show" id="berita" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                    Sosialisasi Regulasi (Perkap, PerAs, KEP, SOP, Juknis) dari Tingkat Mabes ke jajaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                Informasi terkait program kegiatan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/user">
                                Informasi terkait event yang berkaitan dengan binjas Polri.
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>

            <!-- Navigation -->
            <ul class="navbar-nav">

                @if (Auth::user()->role == "user")
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/kesjas">
                            <i class="ni ni-planet text-blue"></i> {{ __('Kesjas Berkala') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/beladiri">
                            <i class="ni ni-pin-3 text-orange"></i> {{ __('Beladiri Polri') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prestasi">
                            <i class="ni ni-air-baloon text-green"></i> {{ __('Personel Prestasi') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rangkuman">
                            <i class="ni ni-books text-pink"></i> {{ __('Rangkuman') }}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>