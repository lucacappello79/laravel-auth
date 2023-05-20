{{-- @extends('layouts/admin')

@section('content')
<div class="main pt-5">
    <h1>{{$project->title}}</h1>
    <hr>
    <p>{{$project->content}}</p>
</div>

@endsection --}}

@extends('layouts/admin')

@section('content')

<main class="container-fluid  text-white">
    <div class="row justify-content-center">

        <div class="col-8">
            <div class="project-card text-center">
                <div class="project-card-body">
                    <h1 class="project-card-title text-center my-4">{{$project->title}}</h1>
                    <hr>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">{{$project->type}}</li>
                        <li class="list-group-item">{{$project->slug}}</li>
                    </ul>
                    <p class="project-card-text mt-4">{{$project->content}}</p>
                </div>

                <div class="project-card-footer text-center">

                    <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-primary">Edit</a>

                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Confermi di voler cancellare questo elemento dalla libreria? Questa azione non è reversibile')">Delete</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</main>

@endsection