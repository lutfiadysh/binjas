@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Dashboard'])

    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title">Hello, Operator!</h3>

                        <div class="row">
                            <div class="card col-sm-6">
                                <div class="card-body">
                                    <div class="chart">
                                        <!-- Chart wrapper -->
                                        <canvas id="chart-orders" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-sm-6">
                                <div class="card-body">
                                    <div class="chart">
                                        <!-- Chart wrapper -->
                                        <canvas id="myChart" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>
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
