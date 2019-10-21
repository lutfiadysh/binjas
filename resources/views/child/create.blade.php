@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards', ['title' => __('Tambah Anak')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('User Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('child.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form method="post" action="{{ route('child.store', $user->id) }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Identitas') }}</h6>
                            <div class="form-group">
                                    <label for="user" class="form-control-label">User Id</label>

                                    <input type="hidden" name="user_id" id="user" class="form-control form-control-alternative" placeholder="User Id" value="{{$user->id}}">

                                    @if ($errors->has('user'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('user') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Nama</label>

                                    <input type="text" name="name" id="name" class="form-control form-control-alternative" placeholder="Nama Anak" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth" class="form-control-label">Tanggal Lahir</label>

                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        
                                        <input class="form-control datepicker" placeholder="Select date" name="date_of_birth" type="text" value="{{ old('date_of_birth') }}">
                                    </div>

                                    @if ($errors->has('date_of_birth'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="role" class="form-control-label">Jenis Kelamin</label>

                                    <select name="sex" id="sex" class="form-control form-control-alternative">
                                        <option disabled selected>Pilih Salah Satu</option>
                                        <option value="Laki-Laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>

                                    @if ($errors->has('sex'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sex') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Simpan') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            endDate: '+0d',
        });
    </script>
@endpush