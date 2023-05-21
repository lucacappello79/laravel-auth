{{-- @extends('layouts/admin')

@section('content')
  <h1>Admin page</h1>

  <hr>

  <ul>
    <li><a href="{{route('admin.projects.index')}}">Show all projects</a></li>
  </ul>
@endsection --}}

@extends('layouts/admin')

@section('content')
  <h1>Admin page</h1>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Manage Projects</a>
      </div>
      {{-- <div class="col-md-6">
        <a href="{{route('admin.users.index')}}" class="btn btn-primary">Manage Users</a>
      </div> --}}
    </div>
  </div>
@endsection