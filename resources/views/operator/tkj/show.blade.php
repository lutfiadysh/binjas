@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards', ['title' => __('Input Nilai TKJ')])   
<div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Nilai TKJ') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                        <form method="post" action="{{ route('tkj.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Tes Kebugaran Jasmani') }}</h6>
                            <div class="row">
                                    <div class="form-group{{ $errors->has('user_id') ? ' has-danger' : '' }} col-md-12">
                                        <div class="row">
                                        <input type="hidden" name="user_id" id="input-name" class="form-control form-control-alternative{{ $errors->has('user_id') ? ' is-invalid' : '' }}" placeholder="{{ __('User ID') }}"  value="{{ $user->id }}" >
                                        </div>
                                    </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} col-md-11 ml-3">
                                    <label class="form-control-label" for="input-name">{{ __('Lari 12 Menit') }}</label>
                                    <div class="row">
                                    <input type="text" name="running" id="input-name" class="form-control  form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Lari') }}" value="{{ old('name') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('lari'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lari') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} col-md-11 ml-3">
                                    <label class="form-control-label" for="input-email">{{ __('Pull Up/Chinning') }}</label>
                                    <div class="row">
                                    <input type="text" name="pull_up" id="input-email" class="form-control col-md-12 form-control-alternative{{ $errors->has('chinning') ? ' is-invalid' : '' }}" placeholder="{{ __('Pull Up/Chinning') }}" value="{{ old('email') }}" required>
                                    </div>
                                    @if ($errors->has('chinning'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('chinning') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('situp') ? ' has-danger' : '' }} col-md-11 ml-3">
                                    <label class="form-control-label" for="input-password">{{ __('Sit up') }}</label>
                                 <div class="row">
                                    <input type="text" name="sit_up" id="input-password" class="form-control col-md-12 form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}" placeholder="{{ __('sit up') }}" value="" required>
                                 </div>
                                    @if ($errors->has('situp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('situp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             <div class="row">
                                <div class="form-group{{ $errors->has('berat') ? ' has-danger' : '' }} col-md-12 ml-3">
                                    <label class="form-control-label" for="input-email">{{ __('tahun') }}</label>
                                    <input type="text" name="year" id="input-email" class="form-control form-control-alternative{{ $errors->has('berat') ? ' is-invalid' : '' }}" placeholder="{{ __('tahun') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('keterangan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('keterangan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-11 ml-3">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Push up') }}</label>
                                 <div class="row">
                                    <input type="text" name="push_up" id="input-password" class="form-control col-md-12 form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}" placeholder="{{ __('Push up') }}" value="" required>
                                 </div>
                                </div>
                                <div class="form-group col-md-11 ml-3">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Shuttle Run') }}</label>
                                    <div class="row">
                                    <input type="text" name="shuttle_run" id="input-password" class="form-control col-md-12 form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}" placeholder="{{ __('Shuttle run') }}" value="" required>
                                 </div>
                                </div>
                                <div class="form-group{{ $errors->has('berat') ? ' has-danger' : '' }} col-md-11 ml-3">
                                    <label class="form-control-label" for="input-email">{{ __('semester') }}</label>
                                    <input type="text" name="semester" id="input-email" class="form-control form-control-alternative{{ $errors->has('berat') ? ' is-invalid' : '' }}" placeholder="{{ __('keterangan') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('keterangan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('keterangan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                         </div>
                         <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Simpan') }}</button>
                         </div>
                        </form>
                    </div>
                </div>
        </div>
        @endsection