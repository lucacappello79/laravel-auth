@extends('layouts/admin')

@section('content')
  <h1 class="m-3">Admin Console</h1>

  <hr>

  <div class="container">
    <div class="row d-flex flex-column gap-3">
      <div class="col-md-6">
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Manage Projects</a>
      </div>
      <div class="col-md-6">
        <a href="{{route('admin.projects.create')}}" class="btn btn-warning">Create Project</a>
      </div>
      {{-- <div class="col-md-6">
        <a href="{{route('admin.users.index')}}" class="btn btn-primary">Manage Users</a>
      </div> --}}
    </div>
  </div>
@endsection
