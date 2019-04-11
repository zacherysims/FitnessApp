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
  <input type="text" name="name"><br><br>
  Length(Days):<br>
  <input type="number" name="length" min = "1" max = "365" ><br><br>
  Difficulty:<br>
  <select>
  <option value="" selected disabled hidden></option>
  <option name="difficulty" value="Beginner">Beginner</option>
  <option name="difficulty" value="Intermediate">Intermediate</option>
  <option name="difficulty" value="Advanced">Advanced</option>
</select><br><br>
  Goal:<br>
  <select>
  <option value="" selected disabled hidden></option>
  <option name="goal" value="Lose Weight">Lose Weight</option>
  <option name="goal" value="Gain Weight">Gain Weight</option>
  <option name="goal" value="Maintain Weight">Maintain Weight</option>
</select><br><br>
Comment:<br>
<input type="submit" value="Add Diet">
</form>
@endsection