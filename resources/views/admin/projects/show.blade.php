@extends('layouts.admin')

<style>
</style>

@section('content')
<div class="container p-5">
    <div class="row row-cols-1 row-cols-lg-2">

        <div class="col">
            <img class="img-fluid" src=" {{$project->img_path}}" alt="{{$project->slug}}">
        </div>

        <div class="col">
            <h1>{{$project->slug}}</h1>
            <p>{{$project->description}}</p>
            <p>{{$project->stack}}</p>
        </div>

    </div>
</div>

@endsection