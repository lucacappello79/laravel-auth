{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts/admin')

@section('content')
  <h1 class="m-3">Admin Console33333juyjyjyj</h1>

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