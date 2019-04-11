@extends('masterlayout')
@section('title')
    Diets
@endsection
@section('tab')
Add a Diet
@endsection
@section('content')

<h1>Add a Diet</h1>
<form action="fill_adddiet">
  Name:<br>
  <input type="text" name="name" required><br><br>
  Length(Days):<br>
  <input type="number" name="length" min = "1" max = "365" required><br><br>
  Difficulty:<br>
  <select name="dietdifficulty" required>
  <option selected  value="Beginner">Beginner</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Advanced">Advanced</option>
</select><br><br>
  Goal:<br>
  <select name="dietgoal" required>
  <option selected value="Lose Weight">Lose Weight</option>
  <option value="Gain Weight">Gain Weight</option>
  <option value="Maintain Weight">Maintain Weight</option>
</select><br><br>
Comment:<br>
<input type="submit" value="Add Diet">
</form>
@endsection