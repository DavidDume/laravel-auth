@extends('layouts.admin')

@section('content')
    
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Link</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($projects as $proj)
        <tr>
            <th scope="row">{{$proj->id}}</th>
            <td>{{$proj->title}}</td>
            <td>{{$proj->link}}</td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection