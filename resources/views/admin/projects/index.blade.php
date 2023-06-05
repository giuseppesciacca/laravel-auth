@extends('layouts.admin')

@section('content')

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>img_path</th>
                <th>stack</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->title}} </td>
                <td>{{$project->slug}}</td>
                <td>{{$project->img_path}}</td>
                <td>{{$project->stack}}</td>
                <td>VIEW/EDIT/DELETE</td>
            </tr>
            @empty
            <p>No project here</p>
            @endforelse
        </tbody>
    </table>
</div>


@endsection