@extends('layouts.admin')

@section('content')
    

    <form method="POST" action="{{route('admin.projects.update', ['project' => $project->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Add Title</label>
            <input type="text" name="title" class="form-control" value="{{old('title', $project->title)}}">
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Add Link</label>
            <input type="text" name="link" class="form-control" value="{{old('link', $project->link)}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Add Description</label>
            <input type="text" name="description" class="form-control" value="{{old('description', $project->description)}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


@endsection