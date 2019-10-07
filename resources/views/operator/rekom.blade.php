@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards', ['title' => 'Rekom'])

    <div class="container-fluid mt--7">
        <div class="card shadow bg-secondary">
            <div class="card-header">
                <h5 class="text-uppercase text-muted mb-0">Rekom</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">SIP</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#sip">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">SESPIMMA</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#sespimma">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">SESPIMMEN</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#sespimmen">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">IPO</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#ipo">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">SESPIMTI</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#sespimti">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">LEMHANAS</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#lemhanas">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">ALGOL</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#algol">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col">
                                        {{-- Konten --}}
                                        <span class="font-weight-bold mb-0">FPU</span>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-2 btn-primary" data-toggle="modal" data-target="#fpu">
                                            <span class="btn-inner--icon"><i class="ni ni-air-baloon"></i></span>
                                        </button>
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

<div class="modal fade" id="sip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Rekom SIP</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="sespimma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan SESPIMMA</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="sespimmen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan SESPIMMEN</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="ipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan IPO</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="sespimti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan SESPIMTI</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="lemhanas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan LEMHANAS</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="algol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan ALGOL</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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

<div class="modal fade" id="fpu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cetak Laporan FPUs</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('Nama') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>Nama</option>
                    <option value="">Desmon Trisandi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="tingkat">{{ __('NRP') }}</label>
                <select name="" id="" class="form-control form-control-alternative">
                    <option value="" disabled>NRP</option>
                    <option value="">91120526</option>
                </select>
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