@extends('layouts/admin')

@section('content')
  <h1>Admin page</h1>

  <hr>

  <ul>
    <li><a href="{{route('admin.projects.index')}}">Show all projects</a></li>
  </ul>
@endsection