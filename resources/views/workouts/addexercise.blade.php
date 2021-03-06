@extends('masterlayout')

@section('title')
    Exercises
@endsection

@section('tab')
Add Exercise
@endsection

@section('content')
<h1>Add and Exercise</h1>
<form action="fillexerciseform">
    Name:<br>
  <input type="text" name="name"><br><br>
Type:<br>
  <select name='type'>
  <option value="" selected disabled hidden></option>
  <option value="Strength">Strength</option>
  <option value="Cardio">Cardio</option>
  <option value="Other">Other</option>
</select><br><br>
  Number of Sets:<br>
  <input type="number" name="numsets" min="1" max ="50"><br><br>
  Comment:<br>
  <textarea name="comment"></textarea><br><br>
  Associated workout:<br>
  <textarea name='workout'></textarea><br><br>
<input type="submit" value="Add Workout">
</form>
@endsection