@extends('dashboard.layouts.main')

@section('container')

<h1 class="mt-4">Daftar Sekolah</h1>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>Alamat Sekolah</th>
                <th>Kota Sekolah</th>
                <th>No Telp Sekolah</th>
            </tr>
        </thead>
        <tbody>
            @php ($no=1)
            @foreach($school as $data)
            
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_sekolah }}</td>
                <td>{{ $data->alamat_sekolah }}</td>
                <td>{{ $data->kota_sekolah }}</td>
                <td>{{ $data->no_sekolah }}</td>               
            </tr>                
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $school->links() }}
    </div>

@endsection