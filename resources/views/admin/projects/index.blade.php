@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
        <tr>

            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Url</th>
            <th scope="col">Descrizione</th>

        </tr>
    </thead>
    <tbody>

        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->url}}</td>
                <td>{{$project->description}}</td>
            </tr>
        @endforeach


    </tbody>
</table>

@endsection