@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Personal Prestasi'])

    <div class="container-fluid mt--7">
        <div class="card card-stats bg-secondary mb-3 shadow">
            <div class="card-body shadow">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Bidang Olahraga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Bidang Lain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Putra / Putri yang Berprestasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            {{-- Bidang Olahraga --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0">Bidang Olahraga</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Cabang Olahraga</th>
                                    <th>Posisi</th>
                                    <th>Tingkat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 9; $i >= 8; $i--)
                                    <tr>
                                        <th colspan="4" class="text-primary">
                                            <span class="display-4">{{ Auth::user()->prestasi->year }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>{{ Auth::user()->prestasi->branch }}</td>
                                        <td>{{ Auth::user()->prestasi->position }}</td>
                                        <td>{{ Auth::user()->prestasi->level }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-icon">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Taekwondo</td>
                                        <td>Atlet</td>
                                        <td>Nasional</td>
                                        <td>
                                            <button class="btn btn-primary btn-icon">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Bidang Lain --}}
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0">Bidang Lain</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Jenis Prestasi</th>
                                    <th>Posisi</th>
                                    <th>Tingkat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 9; $i >= 7; $i--)
                                    <tr>
                                        <th colspan="4" class="text-primary">
                                            <span class="display-4">201{{ $i }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Musik</td>
                                        <td>Gitar</td>
                                        <td>Nasional</td>
                                        <td>
                                            <button class="btn btn-primary btn-icon">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Musik</td>
                                        <td>Band</td>
                                        <td>Provinsi</td>
                                        <td>
                                            <button class="btn btn-primary btn-icon">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Putra / Putri berprestasi --}}
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0">Putra / Putri Berprestasi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama Anak</th>
                                    <th>Usia</th>
                                    <th>Jenis Prestasi</th>
                                    <th>Posisi</th>
                                    <th>Tingkat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 9; $i >= 7; $i--)
                                    <tr>
                                        <th colspan="4" class="text-primary">
                                            <span class="display-4">201{{ $i }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Haidar Lazuardi</td>
                                        <td>17</td>
                                        <td>Karate</td>
                                        <td>Atlet</td>
                                        <td>Nasional</td>
                                        <td>
                                            <button class="btn btn-primary btn-icon">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lutfi Ardiansyah</td>
                                        <td>17</td>
                                        <td>Musik</td>
                                        <td>Gitar</td>
                                        <td>Nasional</td>
                                        <td>
                                            <button class="btn btn-primary btn-icon">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection