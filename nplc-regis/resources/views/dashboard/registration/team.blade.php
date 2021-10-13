@extends('dashboard.layouts.main')

@section('container')

<h1 class="mt-4 mb-2">Daftar Tim</h1>

@if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Tim</th>
            <th>Asal Sekolah</th>
            <th>Nama Coach</th>
            <th>Email Coach</th>
            <th>No Coach</th>
            <th>Kategori</th>
            <th>Region</th>
            <th>Verified</th>            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($team as $data)
        
        <tr>
            <td>{{ $data->id_tim }}</td>
            <td>{{ $data->nama_tim }}</td>
            <td>{{ $data->nama_sekolah }}</td>
            <td>{{ $data->nama_coach }}</td>
            <td>{{ $data->email_coach }}</td>            
            <td>{{ $data->no_coach }}</td> 
            <td>{{ $data->kategori }}</td>
            <td>{{ $data->region }}</td>
            <td>{{ $data->verified }}</td>
            <td>
                <a href="/dashboard/team/{{ $data->id_tim }}" class="btn btn-sm btn-success">Details</a>  
                <a href="/dashboard/team/edit/{{ $data->id_tim }}" class="btn btn-sm btn-warning">Edit</a>  
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $data->id_tim }}">Delete</button> 
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verified{{ $data->id_tim }}">Verified</button>                      
            </td>               
        </tr>                
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-end">
    {{ $team->links() }}
</div>

@foreach ($team as $data)   
    <div class="modal modal-danger fade" id="delete{{ $data->id_tim }}" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Delete Team {{ $data->nama_tim }}?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus tim {{ $data->nama_tim }}?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <a href="/dashboard/team/delete/{{ $data->id_tim }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
        </div>
    </div>

    <div class="modal modal-danger fade" id="verified{{ $data->id_tim }}" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Verified Team {{ $data->nama_tim }}?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>Apakah anda yakin?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <a href="/dashboard/team/verified/{{ $data->id_tim }}" class="btn btn-primary">Ya</a>
            </div>
        </div>
        </div>
    </div>
@endforeach

@endsection