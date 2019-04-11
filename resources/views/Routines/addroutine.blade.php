@extends('masterlayout')

@section('title')
    Routines
@endsection
@section('tab')
Add a Routine
@endsection
@section('content')
<h1>Add a Routine</h1>
<form action="/fill_addroutine" method="POST">
@csrf
  Name:<br>
  <input type="text" name="Name"><br><br>
  Length(Days):<br>
  <input type="number" name="Length" min="1" max="365"><br><br>
  Difficulty:<br>
  <select name = "difficulty">
  <option value="" selected disabled hidden></option>
  <option value="Beginner">Beginner</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Advanced">Advanced</option>
</select><br><br>
  Goal:<br>
  <select name = "goal">
  <option value="" selected disabled hidden></option>
  <option value="Lose">Lose Weight</option>
  <option value="Gain">Gain Weight</option>
  <option value="Maintain">Maintain Weight</option>
</select><br><br>
Split(Days per week):<br>
<input type="number" name="Split" min = "1" max="7"><br><br>
Comment:<br>
  <textarea name="Comment"></textarea><br><br>
<input type="submit" value="Add Routine">

</form>
@endsection