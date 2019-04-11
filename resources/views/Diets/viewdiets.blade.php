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

@if(isset($diets))
@foreach($diets as $diet)
    <h1>Diet name: {{$diet['diet_name']}}</h1>
@endforeach
@endif
@endsection