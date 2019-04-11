@extends('masterlayout')

@section('title')
    You gonna cry?
@endsection

@section('tab')
View Diets
@endsection
@section('content')
<h1>View a diet maybe?</h1>
Maybe shit and <a href="adddiet">add a diet?</a>

@if(isset($diets))
@foreach($diets as $diet)
    <h1>Diet name: {{$diet['diet_name']}}</h1>
@endforeach
@endif
@endsection