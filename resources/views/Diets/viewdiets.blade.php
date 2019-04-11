@extends('masterlayout')

@section('title')
    Diets
@endsection

@section('tab')
View Diets
@endsection
@section('content')
<h1>View Diets</h1>
<a href="adddiet">Add a Diet</a>
@foreach($diets as $diet)
    <h1>Diet name: {{$diet->diet_name}}</h1>
    <p>Diet difficulty: {{$diet->diet_difficulty}}</p>
    <p>Diet goal: {{$diet->diet_goal}}</p>
    <p>Diet length: {{$diet->diet_length}}</p>
@endforeach
@endsection