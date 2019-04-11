@extends('masterlayout')

@section('title')
    Sets
@endsection

@section('tab')
Add Set
@endsection

@section('content')
<h1>Add a Set</h1>
<form action="fillsetform">
    Number of Reps:<br>
  <input type="number" name="numreps" min="1" max ="50"><br><br>
    Time (mins):<br>
    <input type="number" name="time" min="1" max ="180"><br><br>
    Distance(meters):<br>
  <input type="number" name="distance" min="1" max ="10000"><br><br>
    Weight(lbs):<br>
    <input type="number" name="weight" min="1" max ="1000"><br><br>
    Type:<br>
  <select name='type'>
  <option value="" selected disabled hidden></option>
  <option value="Strength">Strength</option>
  <option value="Cardio">Cardio</option>
  <option value="Other">Other</option>
</select><br><br>
  Comment:<br>
  <textarea name="comment"></textarea><br><br>
<input type="submit" value="Add Workout">
</form>
@endsection