@extends('masterlayout')

@section('title')
    Workouts
@endsection

@section('tab')
View Workouts
@endsection

@section('content')
<a href="addworkout">Add a Workout</a><br>
<a href="addexercise">Add an Exercise</a>
<h1>View Workouts</h1>
@if(isset($workouts))
@foreach($workouts as $workout)
<h1>Workout Date: {{$workout->workout_date}}</h1>
    <p>Workout difficulty: {{$workout->workout_difficulty}}</p>
    <p>Workout type: {{$workout->workout_type}}</p>
    <p>Workout length: {{$workout->workout_length}}</p>
    <p>Workout comment: {{$workout->workout_comment}}</p>
@endforeach
@endif
@endsection