@extends('dashboard.layouts.main')

@section('container')

<h1 class="mt-4">Team {{ $team->nama_tim }}</h1>

<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Kode Pos</th>
            <th>Nomor WA</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php ($no=1)
        @foreach($members as $data)
        
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->alamat }}</td> 
            <td>{{ $data->kota }}</td> 
            <td>{{ $data->kode_pos }}</td> 
            <td>{{ $data->no_wa }}</td> 
            <td>
                <a href="" class="btn btn-sm btn-warning">Edit</a>                           
            </td>               
        </tr>                
        @endforeach
    </tbody>
</table>

@endsection