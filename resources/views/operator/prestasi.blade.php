@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Personal Prestasi'])

    <div class="container-fluid mt--7">
        <div class="card card-stats  mb-3 shadow">
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
                    <!-- konten bidang olahraga-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <h6 class="heading-small text-muted mb-4 col-md-8">{{ __('Bidang Olahraga') }}</h6>
                                <div class="col-md-4 text-right">
                                    <button class="btn btn-icon btn-2 btn-primary" type="button" data-toggle="modal" data-target="#cari">
                                        <span class="btn-inner--icon">Cari</span>
                                    </button>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('Cabang olahraga') }}</label>
                                    <select name="cabang" id="cabang" class="form-control form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>cabang olahraga</option>
                                        <option value="">karate</option>
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
                                        <option value="">Pelatih</option>
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

            {{-- Bidang Lain --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="card shadow mb-3">
                    <!-- konten bidang lain-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <h6 class="heading-small text-muted mb-4 col-md-8">{{ __('Bidang Lain') }}</h6>
                                <div class="col-md-4 text-right">
                                    <button class="btn btn-icon btn-2 btn-primary"  type="button" data-toggle="modal" data-target="#cari">
                                        <span class="btn-inner--icon">Cari</span>
                                    </button>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('Cabang olahraga') }}</label>
                                    <select name="cabang" id="cabang" class="form-control form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>cabang olahraga</option>
                                        <option value="">karate</option>
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
                                        <option value="">Pelatih</option>
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

            {{-- Putra / Putri berprestasi --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="card shadow mb-3">
                    <!-- konten bidang prestasi-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="row">
                                <h6 class="heading-small text-muted mb-4 col-md-8">{{ __('Putra/Putri yang Berprestasi') }}</h6>
                                <div class="col-md-4 text-right">
                                    <button class="btn btn-icon btn-2 btn-primary"  type="button" data-toggle="modal" data-target="#carii">
                                        <span class="btn-inner--icon">Cari</span>
                                    </button>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('Cabang olahraga') }}</label>
                                    <select name="cabang" id="cabang" class="form-control form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>cabang olahraga</option>
                                        <option value="">karate</option>
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
                                        <option value="">Pelatih</option>
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
        </div>
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
            <div class="form-group ">
                <label class="form-control-label " for="tingkat">{{ __('NIP/NRP') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="NIP/NRP">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Kesatuan') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Kesatuan">
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

<div class="modal fade" id="carii" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header mb--3">
        <h3 class="title">Data orang tua</h3>
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
            <div class="form-group ">
                <label class="form-control-label " for="tingkat">{{ __('NIP/NRP') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="NIP/NRP">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Kesatuan') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Kesatuan">
            </div>
            <h3 class="title mb-2">Data Anak</h3>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Nama">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Jenis Kelamin') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Usia') }}</label>
                <input type="text" class="form-control form-control-alternative" placeholder="Usia">
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