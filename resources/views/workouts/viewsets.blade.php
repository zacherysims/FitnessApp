@extends('masterlayout')

@section('title')
    Sets
@endsection

@section('tab')
View Sets
@endsection

@section('content')
<a href="fillset">Add a set</a>
<h1>View sets</h1>
@if(isset($sets))
@foreach($sets as $set)
<h1>Set ID: {{$set->exer_set_id}}</h1>
    <p>set type: {{$set->exer_set_type}}</p> 
    <p>set reps: {{$set->exer_set_num_reps}}</p>
    <p>set time: {{$set->exer_set_time}}</p>
    <p>set distance: {{$set->exer_set_distance}}</p>
    <p>set weight: {{$set->exer_set_weight}}</p>
    <p>set comment: {{$set->set_comment}}</p>
@endforeach
@endif
@endsection