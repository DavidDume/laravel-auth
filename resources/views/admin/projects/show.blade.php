@extends('layouts.admin')

@section('content')

    <p>Project id: {{$project->id}}</p>
    <h1>{{$project->title}}</h1>
    <a href="{{$project->link}}">Preview</a>
@endsection