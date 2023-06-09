@extends('layouts.admin')

@section('content')

    <p>Project id: {{$project->id}}</p>
    <h1>{{$project->title}}</h1>
    <a href="{{$project->link}}">Preview</a>
    <div class="d-flex mt-5">
        <a type="button" class="btn btn-warning" href="{{route('admin.projects.edit', ['project' => $project->id])}}">Modifica</a>
        <form action="{{route('admin.projects.destroy', ['project' => $project->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
    
@endsection