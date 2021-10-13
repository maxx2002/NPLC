@extends('dashboard.layouts.main')

@section('container')

<h3 class="mt-4">Edit Team</h3>

<form action="/dashboard/team/update/{{ $team->id_tim }}" method="POST" class="mt-4">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama Tim</label>
                    <input type="text" class="form-control @error('nama_tim') is-invalid @enderror" name="nama_tim" value="{{ $team->nama_tim }}">
                    <div class="invalid-feedback">
                        @error('nama_tim')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Nama Coach</label>
                    <input type="text" class="form-control @error('nama_coach') is-invalid @enderror" name="nama_coach" value="{{ $team->nama_coach }}">
                    <div class="invalid-feedback">
                        @error('nama_coach')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Email Coach</label>
                    <input type="text" class="form-control @error('email_coach') is-invalid @enderror" name="email_coach" value="{{ $team->email_coach }}">
                    <div class="invalid-feedback">
                        @error('email_coach')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Nomor WA Coach</label>
                    <input type="text" class="form-control @error('no_coach') is-invalid @enderror" name="no_coach" value="{{ $team->no_coach }}">
                    <div class="invalid-feedback">
                        @error('no_coach')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ $team->kategori }}">
                    <div class="invalid-feedback">
                        @error('kategori')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Region</label>
                    <input type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ $team->region }}">
                    <div class="invalid-feedback">
                        @error('region')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                </div>
            </div>
        </div>        
    </div>
    
</form>

@endsection