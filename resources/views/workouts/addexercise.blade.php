@extends('masterlayout')

@section('title')
    Exercises
@endsection

@section('tab')
Add Exercise
@endsection

@section('content')
<h1>Add and Exercise</h1>
<form action="fillexercise">
    Name:<br>
  <input type="text" name="name"><br><br>
  Date:<br>
  <input type="text" name="date" placeholder="YYYY-MM-DD" required 
    pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
    title="Enter a date in this format YYYY-MM-DD"/><br><br>
    
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
  <textarea name="Comment"></textarea><br><br>
<input type="submit" value="Add Workout">
</form>
@endsection