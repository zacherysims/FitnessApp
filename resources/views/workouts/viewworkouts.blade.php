@extends('masterlayout')

@section('title')
    Workouts
@endsection

@section('tab')
View Workouts
@endsection

@section('content')
<a href="addworkout">Add a Workout</a><br>
<a href="viewexercises">View Exercises</a>
<h1>View Workouts</h1>
@if(isset($workouts))
@foreach($workouts as $workout)
<h1>Workout Date: {{$workout->workout_date}}</h1>
    <p>Workout difficulty: {{$workout->workout_difficulty}}</p>
    <p>Workout type: {{$workout->workout_type}}</p>
    <p>Workout length: {{$workout->workout_length}}</p>
    <p>Workout comment: {{$workout->workout_comment}}</p>
    <p>Workout id (Important for adding exercises!): {{$workout->workout_id}}</p>
@endforeach
@endif
@endsection