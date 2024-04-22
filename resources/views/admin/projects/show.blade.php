@extends('layouts.app')

@section('content')

    <div class="container py-4">

        <h1>{{$project->title}}</h1>

        <p>
            {{$project->content}}
        </p>

        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a>
        
    </div>
    
@endsection