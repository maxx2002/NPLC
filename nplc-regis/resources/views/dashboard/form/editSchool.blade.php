@extends('dashboard.layouts.main')

@section('container')

<h3 class="mt-4">Edit School</h3>

<form action="/dashboard/update/team/insert" method="POST" class="mt-4">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama Sekolah</label>
                    <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                    <div class="invalid-feedback">
                        @error('nama_tim')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Alamat Sekolah</label>
                    <input type="text" class="form-control @error('alamat_sekolah') is-invalid @enderror" name="alamat_sekolah" value="{{ old('alamat_sekolah') }}">
                    <div class="invalid-feedback">
                        @error('alamat_sekolah')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Kota Sekolah</label>
                    <input type="text" class="form-control @error('kota_sekolah') is-invalid @enderror" name="kota_sekolah" value="{{ old('kota_sekolah') }}">
                    <div class="invalid-feedback">
                        @error('kota_sekolah')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Nomor Telefon Sekolah</label>
                    <input type="text" class="form-control @error('no_sekolah') is-invalid @enderror" name="no_sekolah" value="{{ old('no_sekolah') }}">
                    <div class="invalid-feedback">
                        @error('no_sekolah')
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