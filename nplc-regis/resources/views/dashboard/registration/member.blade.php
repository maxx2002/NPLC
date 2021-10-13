@extends('dashboard.layouts.main')

@section('container')

<h1 class="mt-4 mb-2">Team {{ $team->nama_tim }}</h1>

@if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

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
                <a href="/dashboard/team/member/edit/{{ $data->id_member }}" class="btn btn-sm btn-warning">Edit</a>                           
            </td>               
        </tr>                
        @endforeach
    </tbody>
</table>
<a href="/dashboard/team" class="btn btn-success mt-2">Back</a> 

@endsection