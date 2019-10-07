@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Kesjas Berkala'])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Data Kesamaptaan Jasmani Perorangan Pegawai Negeri Pada Polri</h3>
                    </div>
                    <div class="card-body bg-secondary">
                        <div class="row">
                            <div class="col-2">
                                <label for="">Tahun</label>
                                <select name="" id="" class="form-control form-control-alternative">
                                    <option value="">2019</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="">Semester</label>
                                <select name="" id="" class="form-control form-control-alternative">
                                    <option value="">1 (satu)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0">Kebugaran</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Label</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lari 12 menit</td>
                                    <td class="font-weight-bold">2680</td>
                                    <td class="font-weight-bold">73</td>
                                </tr>
                                <tr>
                                    <td>Pull up / chinning</td>
                                    <td class="font-weight-bold">17</td>
                                    <td class="font-weight-bold">100</td>
                                </tr>
                                <tr>
                                    <td>Sit up</td>
                                    <td class="font-weight-bold">42</td>
                                    <td class="font-weight-bold">100</td>
                                </tr>
                                <tr>
                                    <td>Push up</td>
                                    <td class="font-weight-bold">42</td>
                                    <td class="font-weight-bold">100</td>
                                </tr>
                                <tr>
                                    <td>Shuttle run</td>
                                    <td class="font-weight-bold">18.2</td>
                                    <td class="font-weight-bold">83</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-gradient-primary shadow mb-4">
                    <div class="card-body text-white">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase font-weight-bold text-lighter mb-0">Kebugaran</h5>

                                {{-- Konten --}}
                                <div class="row">
                                    <div class="col">
                                        <span class="display-3 font-weight-bold mb-0">85</span>
                                        <span>
                                            <small class="text-lighter font-weight-bold">Nilai</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="display-3 font-weight-bold mb-0">BS</span>
                                        <span>
                                            <small class="text-lighter font-weight-bold">Kategori</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-muted mb-0">Postur</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Label</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gol.</td>
                                    <td class="font-weight-bold">73</td>
                                </tr>
                                <tr>
                                    <td>Tinggi Badan</td>
                                    <td class="font-weight-bold">175 <small class="text-muted">cm</small></td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                    <td class="font-weight-bold">75 <small class="text-muted">kg</small></td>
                                </tr>
                                <tr>
                                    <td>Index Massa Tubuh</td>
                                    <td class="font-weight-bold">23</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td class="text-success font-weight-bold">Normal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection