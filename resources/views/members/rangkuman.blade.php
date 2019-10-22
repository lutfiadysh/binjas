@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Rangkuman'])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Kebugaran</h5>

                                {{-- Konten --}}
                                <span class="display-3 font-weight-bold mb-0">BS</span>
                                <span>
                                    <small class="text-muted">Kategori</small>
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                    <span>83</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Beladiri Polri</h5>

                                {{-- Konten --}}
                                <span class="display-3 font-weight-bold mb-0">B</span>
                                <span>
                                    <small class="text-muted">Kategori</small>
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                    <span>{{ Auth::user()->bdp->with_equipment }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Postur</h5>
                                
                                {{-- Konten --}}
                                <div class="row">
                                    <div class="col">
                                        <span class="display-3 font-weight-bold mb-0">175</span>
                                        <span>
                                            <small class="text-muted">Tinggi</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="display-3 font-weight-bold mb-0">75</span>
                                        <span>
                                            <small class="text-muted">Berat</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="display-3 font-weight-bold mb-0">23</span>
                                        <span>
                                            <small class="text-muted">IMT</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="py-2 px-4 bg-success text-white rounded shadow">
                                    <span>Normal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card shadow card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Saran</h5>

                                {{-- Konten --}}
                                <span>
                                    <small class="text-muted">
                                    Kondisi kebugaran anda sudah bagus agar tetap di pertahankan dan di tingkatkan
                                    </small>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush