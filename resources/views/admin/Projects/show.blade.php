@extends('layouts.admin')

@section('content')
<h1 class="my-4">{{$project->name}}</h1>
@if($project->cover_image)
    <img src="{{asset("storage/$project->cover_image")}}" alt="{{$project->name}}" class="w-25">
@endif
<h4 class="mt-4">Description:</h4>
<p>{{$project->description}}</p>
<h4 class="mt-4">Costumer:</h4>
<span>{{$project->client}}</span>
@endsection