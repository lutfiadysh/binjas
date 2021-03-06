@extends('layouts.app', ['title' => 'Anak'])

@section('content')
    @include('layouts.headers.cards', ['title' => 'Data Anak'])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"></h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="/child/{{ $user->id }}/create" class="btn btn-sm btn-primary">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <h3>Anak dari sdr. <b>{{ $user->name }}</b></h3>

                            <table class="table table-bordered table-flush" id="table">
                                <thead class="thead-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Anak</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tanggal lahir</th>
                                    <th scope="col"></th>
                                </thead>
                                <tbody>
                                    @foreach ($child as $child)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $child->name }}</td>
                                            <td>{{ $child->sex }} </td>
                                            <td>{{ $child->date_of_birth }}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-primary btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @if ($child->id != auth()->id())
                                                            <form action="{{ route('user.destroy', $user) }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                
                                                                <a class="dropdown-item" href="{{ route('child.edit', $child) }}">{{ __('Edit') }}</a>
                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                    {{ __('Delete') }}
                                                                </button>
                                                            </form>    
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection