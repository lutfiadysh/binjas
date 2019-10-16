@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards', ['title' => __('Tambah Personel')])   

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
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
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
                        
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Identitas') }}</h6>

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label for="nip" class="form-control-label">NIP</label>

                                    <input type="number" name="nip" id="nip" class="form-control form-control-alternative" placeholder="NIP" value="{{ old('nip') }}" required>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Nama</label>

                                    <input type="text" name="name" id="name" class="form-control form-control-alternative" placeholder="Nama Personel" value="{{ old('name') }}" required>

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
                                    <label for="role" class="form-control-label">Role</label>

                                    <select name="role" id="role" class="form-control form-control-alternative">
                                        <option disabled selected>Pilih Salah Satu</option>
                                        <option value="user">User</option>
                                        <option value="operator">Operator</option>
                                    </select>

                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <h6 class="heading-small text-muted mb-4 mt-5">{{ __('Instansi') }}</h6>

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label for="pangkat" class="form-control-label">Pangkat</label>

                                    <input type="text" name="pangkat" id="pangkat" class="form-control form-control-alternative" placeholder="Pangkat" value="{{ old('pangkat') }}" required>

                                    @if ($errors->has('pangkat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pangkat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="kesatuan" class="form-control-label">Kesatuan</label>

                                    <input type="text" name="kesatuan" id="kesatuan" class="form-control form-control-alternative" placeholder="Kesatuan" value="{{ old('kesatuan') }}" required>

                                    @if ($errors->has('kesatuan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('kesatuan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="gol" class="form-control-label">Golongan</label>

                                    <input type="text" name="gol" id="gol" class="form-control form-control-alternative" placeholder="Golongan" value="{{ old('gol') }}" required>

                                    @if ($errors->has('gol'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gol') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <h6 class="heading-small text-muted mb-4 mt-5">{{ __('Autentikasi') }}</h6>

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email</label>

                                    <input type="email" name="email" id="email" class="form-control form-control-alternative" placeholder="Email Personel" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-control-label">Password</label>

                                    <input type="password" name="password" id="password" class="form-control form-control-alternative" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">Konfirmasi Password</label>

                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Konfirmasi Password') }}" value="" required>
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