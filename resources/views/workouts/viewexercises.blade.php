@extends('masterlayout')

@section('title')
    Exercises
@endsection

@section('tab')
View Exercises
@endsection

@section('content')
<a href="fillexercise">Add an Exercise</a><br>
<a href= "viewsets">View all Sets</a>
<h1>View exercises</h1>
@if(isset($exercises))
@foreach($exercises as $exercise)
<h1>Exercise name: {{$exercise->exercise_name}}</h1>
    <p>Exercise type: {{$exercise->exercise_type}}</p> 
    <p>Exercise sets: {{$exercise->exercise_num_sets}}</p>
    <p>Exercise comment: {{$exercise->exercise_comment}}</p>
@endforeach
@endif
@endsection