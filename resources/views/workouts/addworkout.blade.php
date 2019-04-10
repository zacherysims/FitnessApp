@extends('masterlayout')

@section('title')
    You gonna cry?
@endsection
@section('tab')
Add a Workout
@endsection
@section('tab')
Add a Workout
@endsection
@section('content')
<h1>Add a workout maybe?</h1>
<form action="addworkout">
  Date:<br>
  <input type="text" name="input" placeholder="YYYY-MM-DD" required 
    pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
    title="Enter a date in this format YYYY-MM-DD"/><br><br>
  Difficulty:<br>
  <select>
  <option value="" selected disabled hidden></option>
  <option value="Beginner">Beginner</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Advanced">Advanced</option>
</select><br><br>
Type:<br>
  <select>
  <option value="" selected disabled hidden></option>
  <option value="Strength">Strength</option>
  <option value="Cardio">Cardio</option>
  <option value="Other">Other</option>
</select><br><br>
  Number of Exercises:<br>
  <input type="number" name="Number of Exercises" min="1" max ="50"><br><br>
  Length:<br>
  <input type="number" name="Length_hours" min = "1" max = "10" placeholder = "Hours">
  <input type="number" name="Length_minutes" min = "1" max = "59" placeholder = "Minutes"><br><br>
  Comment:<br>
  <textarea name="Comment"></textarea><br><br>
<input type="submit" value="Add Workout">
</form>
@endsection