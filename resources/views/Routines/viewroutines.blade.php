@extends('masterlayout')

@section('title')
    Routines
@endsection
@section('tab')
View Routines
@endsection
@section('content')
<h1>View Routines</h1>
<a href="addroutine">Add a Routine</a>
@if(isset($routines))
@foreach($routines as $routine)
<h1>Routine name: {{$routine->rou_name}}</h1>
    <p>Routine difficulty: {{$routine->rou_difficulty}}</p>
    <p>Routine goal: {{$routine->rou_goal}}</p>
    <p>Routine length: {{$routine->rou_length}}</p>
    <p>Routine split: {{$routine->rou_split}}</p>
@endforeach
@endif
@endsection