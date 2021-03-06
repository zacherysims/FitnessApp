@extends('masterlayout')

@section('title')
    Workouts
@endsection

@section('tab')
Add Workout
@endsection

@section('content')
<h1>Add a Workout</h1>
<form action="/fill_addworkout" method="POST">
@csrf
  Date:<br>
  <input type="text" name="date" placeholder="YYYY-MM-DD" required 
    pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
    title="Enter a date in this format YYYY-MM-DD"/><br><br>
  Difficulty:<br>
  <select name= "difficulty">
  <option value="" selected disabled hidden></option>
  <option value="Begginer">Begginer</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Advanced">Advanced</option>
</select><br><br>
Type:<br>
  <select name="style">
  <option value="" selected disabled hidden></option>
  <option value="Strength">Strength</option>
  <option value="Cardio">Cardio</option>
  <option value="Other">Other</option>
</select><br><br>
  Number of Exercises:<br>
  <input type="number" name="numex" min="1" max ="50"><br><br>
  Length:<br>
  <input type="number" name="length_hours" min = "1" max = "10" placeholder = "Hours">
  <input type="number" name="length_minutes" min = "1" max = "59" placeholder = "Minutes"><br><br>
  Comment:<br>
  <textarea name="comment"></textarea><br><br>
  Associated Routine:<br>
  <textarea name="routinename"></textarea><br><br>
<input type="submit" value="Add Workout">
</form>
@endsection