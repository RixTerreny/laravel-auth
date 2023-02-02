@extends("dashboard")

@section("content")

<thead>
    <th>Name</th>
    <th>Description</th>
    <th>Cover_img</th>
    <th>Github_link</th>
    <th></th>
</thead>
<br>
<tbody>
    @foreach ( $projects as $project )
        <tr>
            <td>{{$project->name}}/</td>
            <td>{{Str::limit( $project->description,50)}}/</td>
            <td>{{$project->cover_img}}/</td>
            <td>{{$project->github_link}}</td>
            <td>
                {{-- <a class="me-1" href="{{route("/",$project->id)}}">&#128065;</a>
                <a href="{{route("/",$project->id)}}">&#9998;</a> --}}
            </td>
        </tr>
    @endforeach

@endsection