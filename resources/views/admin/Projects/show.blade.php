@extends('layouts.admin')

@section('content')
<h1 class="my-4">{{$project->name}}</h1>
@if($project->type?->name)
    <h3>Type: {{$project->type->name}}</h3>
@else
    <h3>No Type Associated</h3>
@endif
@if($project->cover_image)
    <img src="{{asset("storage/$project->cover_image")}}" alt="{{$project->name}}" class="w-25">
@endif
<h4 class="mt-4">Description:</h4>
<p>{{$project->description}}</p>
<h4 class="mt-4">Costumer:</h4>
<span>{{$project->client}}</span>
@endsection