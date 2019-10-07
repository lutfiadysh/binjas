@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards', ['title' => __('Input Nilai Beladiri')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Nilai Beladiri') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#cari">
                                    <span class="btn-inner--icon">Cari</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Beladiri polri') }}</h6>
                         <div class="row">
                            <div class="pl-lg-4 col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Lari 12 Menit') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Lari') }}" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('lari'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lari') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Pull Up/Chinning') }}</label>
                                    <input type="text" name="pull up" id="input-email" class="form-control form-control-alternative{{ $errors->has('chinning') ? ' is-invalid' : '' }}" placeholder="{{ __('Pull Up/Chinning') }}" value="{{ old('email') }}" required>
                                    @if ($errors->has('chinning'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('chinning') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('situp') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Sit up') }}</label>
                                    <input type="text" name="situp" id="input-password" class="form-control form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}" placeholder="{{ __('sit up') }}" value="" required>
                                    @if ($errors->has('situp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('situp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('tb') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tinggi Badan') }}</label>
                                    <input type="number" name="tinggi" id="input-name" class="form-control form-control-alternative{{ $errors->has('tinggi') ? ' is-invalid' : '' }}" placeholder="{{ __('Tinggi Badan') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('lari'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lari') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('berat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Berat Badan') }}</label>
                                    <input type="number" name=" berat" id="input-email" class="form-control form-control-alternative{{ $errors->has('berat') ? ' is-invalid' : '' }}" placeholder="{{ __('berat') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('chinning'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('chinning') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('tb') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('IMT') }}</label>
                                    <input type="text" name="imt" id="input-name" class="form-control form-control-alternative{{ $errors->has('imt') ? ' is-invalid' : '' }}" placeholder="{{ __('IMT') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('imt'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('imt') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('berat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Keterangan') }}</label>
                                    <input type="text" name="keterangan" id="input-email" class="form-control form-control-alternative{{ $errors->has('berat') ? ' is-invalid' : '' }}" placeholder="{{ __('keterangan') }}" value="{{ old('email') }}" required>

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
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

<div class="modal fade" id="cari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <input type="text" class="form-control form-control-alternative " placeholder="Nama">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Pangkat') }}</label>
                <input type="text" class=" form-control form-control-alternative" placeholder="Pangkat">
            </div>
            <div class="form-group row">
                <label class="form-control-label col-md-12" for="tingkat">{{ __('Tgl Lahir') }}</label>
                <input type="text" class="ml-3 form-control form-control-alternative col-sm-6" placeholder="Tanggal  lahir">
                <input type="text" class="form-control form-control-alternative col-sm-3" placeholder="umur">
            </div>
            <div class="form-group ">
                <label class="form-control-label " for="tingkat">{{ __('NIP/NRP') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="NIP/NRP">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Kesatuan') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Kesatuan">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Gol') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Gol">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Cari</button>
      </div>
    </div>
  </div>
</div>