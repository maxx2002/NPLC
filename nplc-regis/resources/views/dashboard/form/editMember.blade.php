@extends('dashboard.layouts.main')

@section('container')

<h3 class="mt-4">Edit Member</h3>

<form action="/dashboard/team/member/update/{{ $members->id_member }}" method="POST" class="mt-4">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $members->nama }}">
                    <div class="invalid-feedback">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Gender</label>
                    <input type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $members->gender }}">
                    <div class="invalid-feedback">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $members->email }}">
                    <div class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $members->alamat }}">
                    <div class="invalid-feedback">
                        @error('alamat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Kota</label>
                    <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ $members->kota }}">
                    <div class="invalid-feedback">
                        @error('kota')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Kode Pos</label>
                    <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{ $members->kode_pos }}">
                    <div class="invalid-feedback">
                        @error('kode_pos')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Nomor WA</label>
                    <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" value="{{ $members->no_wa }}">
                    <div class="invalid-feedback">
                        @error('no_wa')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3 visually-hidden">
                    <label for="">id Team</label>
                    <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="id_tim" value="{{ $members->id_tim }}">
                    <div class="invalid-feedback">
                        @error('no_wa')
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