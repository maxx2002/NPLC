@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ Auth::user()->name }}</h1>    
</div>

@php ($i = 0)
@php ($j = 0)
@foreach ($team as $item)
    @php ($i++)
    @if ($item->verified === "yes")
      @php ($j++)
    @endif
@endforeach

<div class="row">
    <div class="col-sm-4">
      <div class="card bg-light shadow-sm mt-2">
        <div class="card-body">
          <h5 class="card-title">Total Teams</h5>
          <h6 class="card-text">{{ $i }}</h6>
          <a href="/dashboard/team" class="btn btn-primary">View Teams</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card bg-light shadow-sm mt-2">
          <div class="card-body">
            <h5 class="card-title">Verified Teams</h5>
            <h6 class="card-text">{{ $j }}</h6>
            <a href="#" class="btn btn-success">Blast Email</a>
          </div>
        </div>
    </div>
</div>

@endsection