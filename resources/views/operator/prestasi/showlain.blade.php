@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Personal Prestasi'])

{{-- Bidang Lain --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="card shadow mb-3">
                    <!-- konten bidang lain-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <h6 class="heading-small text-muted mb-4 col-md-8">{{ __('Bidang Lain') }}</h6>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('User ID') }}</label>
                                    <input type="text" name="user_id" id="user_id" value="{{$users->id}}" class="form-control form-control-alternative col-md-3" disabled>
                                    @if ($errors->has('user_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('Cabang olahraga') }}</label>
                                    <select name="cabang" id="cabang" class="form-control form-control-alternative{{ $errors->has('cabang') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>cabang olahraga</option>
                                        <option value="karate">karate</option>
                                    </select>
                                    @if ($errors->has('cabang'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cabang') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="posisi">{{ __('Posisi') }}</label>
                                    <select name="poisi" id="posisi" class="form-control form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>posisi</option>
                                        <option value="pelatih">Pelatih</option>
                                    </select>
                                    @if ($errors->has('chinning'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('chinning') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('situp') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Tingkat') }}</label>
                                    <select name="tingkat" id="tingkat" class="form-control form-control-alternative">
                                        <option value="" disabled autofocus>tingkat</option>
                                        <option value="">nasional</option>
                                    </select>
                                    @if ($errors->has('situp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('situp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('situp') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Upload Piagam') }}</label>
                                    <input type="file" class="form-control form-control-alternative">
                                    @if ($errors->has('situp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('situp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('situp') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Tahun') }}</label>
                                    <select name="tingkat" id="tingkat" class="form-control form-control-alternative">
                                        <option value="" disabled>tahun</option>
                                        <option value="">2019</option>
                                        <option value="">2018</option>
                                    </select>
                                    @if ($errors->has('situp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('situp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Simpan') }}</button>
                             </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection