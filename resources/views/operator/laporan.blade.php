@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Laporan'])

    <div class="container-fluid mt--7">
        <div class="card card-stats  mb-3 shadow">
            <div class="card-body shadow">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Laporan TKJ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Laporan IMT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Laporan BDP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Laporan TKJ DIKTUK/DIKBANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Laporan TKT FPU</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            {{-- Laporan Kesamptaan Jasmani --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="card shadow mb-3">
                    <!-- konten bidang olahraga-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="d-flex">
                                <h6 class="heading-small text-muted mb-4">{{ __('Laporan Kesampataan Jasmani Berkala') }}</h6>
                                <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modaltkj">Upload</button>
                            </div>
                            <div class="pl-lg-4">
                                <div class=" form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('Tingkat') }}</label>
                                    <select name="cabang" id="cabang" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>tingkat</option>
                                        <option value="">Mabes</option>
                                    </select>
                                    @if ($errors->has('tingkat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tingkat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('kesatuan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="posisi">{{ __('Kesatuan') }}</label>
                                    <select name="kesatuan" id="posisi" class="form-control form-control-alternative{{ $errors->has('situp') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>Kesatuan</option>
                                        <option value="">SSDM POLRI</option>
                                    </select>
                                    @if ($errors->has('kesatuan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('kesatuan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sub') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Sub Satker') }}</label>
                                    <select name="sub" id="tingkat" class="form-control form-control-alternative">
                                        <option value="" disabled autofocus>Sub Satker</option>
                                        <option value="">BIROWATPERS</option>
                                    </select>
                                    @if ($errors->has('sub'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sub') }}</strong>
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
                                <div class="form-group{{ $errors->has('semester') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Semester') }}</label>
                                    <select name="semester" id="tingkat" class="form-control form-control-alternative">
                                        <option value="" disabled>semester</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                    @if ($errors->has('semester'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('semester') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('CARI') }}</button>
                             </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Laporan Program IMT --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="card shadow mb-3">
                    <!-- konten bidang lain-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="d-flex">
                                <h6 class="heading-small text-muted mb-4">{{ __('Laporan Program IMT') }}</h6>
                                <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modalimt">Upload</button>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="cabang">{{ __('Tingkat') }}</label>
                                    <select name="tingkat" id="cabang" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>Tingkat</option>
                                        <option value="">Polda</option>
                                    </select>
                                    @if ($errors->has('tingkat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tingkat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="posisi">{{ __('Kesatuan') }}</label>
                                    <select name="tingkat" id="posisi" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                        <option value="" disabled>kesatuan</option>
                                        <option value="">POLDA JATENG</option>
                                    </select>
                                    @if ($errors->has('tingkat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tingkat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sub') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Sub Satker') }}</label>
                                    <select name="sub" id="tingkat" class="form-control form-control-alternative">
                                        <option value="" disabled autofocus>Sub Satker</option>
                                        <option value="">-</option>
                                    </select>
                                    @if ($errors->has('sub'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sub') }}</strong>
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
                                <div class="form-group{{ $errors->has('semester') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tingkat">{{ __('Semester') }}</label>
                                    <select name="semester" id="tingkat" class="form-control form-control-alternative">
                                        <option value="" disabled>semester</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                    @if ($errors->has('semester'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('semester') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('CARI') }}</button>
                             </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Laporan BDP --}}
            <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                <div class="card shadow mb-3">
                    <!-- konten bidang prestasi-->
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            <div class="d-flex">
                                <h6 class="heading-small text-muted mb-4">{{ __('Laporan BDP') }}</h6>
                                <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modalbdp">Upload</button>
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
                                <button type="submit" class="btn btn-primary mt-4">{{ __('CARI') }}</button>
                             </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

         {{-- Laporan Program diktukbang --}}
         <div class="tab-pane fade show active" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
            <div class="card shadow mb-3">
                <!-- konten bidang lain-->
                <div class="card-body">
                    <form method="post" action="" autocomplete="off">
                        @csrf
                        <div class="d-flex">
                            <h6 class="heading-small text-muted mb-4">{{ __('Laporan Program TKJ DIKTUK/DIKBANG') }}</h6>
                            <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modalimt">Upload</button>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="cabang">{{ __('Tingkat') }}</label>
                                <select name="tingkat" id="cabang" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                    <option value="" disabled>Tingkat</option>
                                    <option value="">Polda</option>
                                </select>
                                @if ($errors->has('tingkat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tingkat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="posisi">{{ __('Kesatuan') }}</label>
                                <select name="tingkat" id="posisi" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                    <option value="" disabled>kesatuan</option>
                                    <option value="">POLDA JATENG</option>
                                </select>
                                @if ($errors->has('tingkat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tingkat') }}</strong>
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
                            <button type="submit" class="btn btn-primary mt-4">{{ __('CARI') }}</button>
                         </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Laporan Program TKJ --}}
         <div class="tab-pane fade show active" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
            <div class="card shadow mb-3">
                <!-- konten bidang lain-->
                <div class="card-body">
                    <form method="post" action="" autocomplete="off">
                        @csrf
                        <div class="d-flex">
                            <h6 class="heading-small text-muted mb-4">{{ __('Laporan Program TKJ FPU') }}</h6>
                            <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modalimt">Upload</button>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="cabang">{{ __('Tingkat') }}</label>
                                <select name="tingkat" id="cabang" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                    <option value="" disabled>Tingkat</option>
                                    <option value="">Polda</option>
                                </select>
                                @if ($errors->has('tingkat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tingkat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('tingkat') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="posisi">{{ __('Kesatuan') }}</label>
                                <select name="tingkat" id="posisi" class="form-control form-control-alternative{{ $errors->has('tingkat') ? ' is-invalid' : '' }}">
                                    <option value="" disabled>kesatuan</option>
                                    <option value="">POLDA JATENG</option>
                                </select>
                                @if ($errors->has('tingkat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tingkat') }}</strong>
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
                            <button type="submit" class="btn btn-primary mt-4">{{ __('CARI') }}</button>
                         </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection

<div class="modal fade" id="modaltkj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Upload Laporan TKJ</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Tingkat') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Tingkat</option>
                    <option value="">POLDA</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Kesatuan') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Kesatuan</option>
                    <option value="">POLDA JATENG</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Sub Satker') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Sub Satker</option>
                    <option value="">-</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Tahun') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Tahun</option>
                    <option value="">2019</option>
                    <option value="">2018</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Semester') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Semester</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Upload</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalbdp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Upload Laporan BDP</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Tingkat') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Tingkat</option>
                    <option value="">POLDA</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Kesatuan') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Kesatuan</option>
                    <option value="">POLDA JATENG</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Sub Satker') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Sub Satker</option>
                    <option value="">-</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Tahun') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Tahun</option>
                    <option value="">2019</option>
                    <option value="">2018</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Semester') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Semester</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Upload</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalimt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Upload Laporan IMT</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Tingkat') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Tingkat</option>
                    <option value="">MABES</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Kesatuan') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Kesatuan</option>
                    <option value=""> </option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('SUB SATKER') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>SUB SATKER</option>
                    <option value="">-</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Tahun') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Tahun</option>
                    <option value="">2019</option>
                    <option value="">2018</option>
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Upload</button>
      </div>
    </div>
  </div>
</div>