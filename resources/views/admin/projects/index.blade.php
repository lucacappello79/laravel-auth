@extends('layouts/admin')

@section('content')
<table class="mt-5 table table-striped">

    <thead>
      <th>Title</th>
      <th>Language</th>
      <th>Content</th>
      <th>Slug</th>
      <th>Console</th>

    </thead>
  
    <tbody>
  
      @foreach($projects as $item)
      <tr >
        <td>{{$item->title}}</td>
        <td>{{$item->type}}</td>
        <td>{{$item->content}}</td>
        <td>{{$item->slug}}</td>
        <td><a href="{{route('admin.projects.show', $item->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
      </tr>
      @endforeach
  
    </tbody>
</table>
@endsection