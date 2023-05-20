@extends('layouts/admin')

@section('content')
<table class="mt-5 table table-striped">
    
    <thead>
      <th>
        Titolo
      </th>
      <th>Contenuto</th>
      <th>
        Slug
      </th>
      <th>
        Comandi
      </th>
    </thead>
  
    <tbody>
  
      @foreach($posts as $post)
      <tr >
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->slug}}</td>
        <td><a href="{{route('admin.posts.show', $post->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
      </tr>
      @endforeach
  
  
    </tbody>
</table>
@endsection