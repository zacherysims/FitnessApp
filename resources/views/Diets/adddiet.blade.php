@extends('masterlayout')

@section('title')
    You gonna cry?
@endsection
@section('content')
<h1>Add a diet maybe?</h1>
<form action="/action_page.php">
  Name:<br>
  <input type="text" name="Name"><br><br>
  Length(Days):<br>
  <input type="int" name="Length"><br><br>
  Difficulty:<br>
  <select>
  <option value="" selected disabled hidden></option>
  <option value="Beginner">Beginner</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Advanced">Advanced</option>
</select><br><br>
  Goal:<br>
  <select>
  <option value="" selected disabled hidden></option>
  <option value="Lose Weight">Lose Weight</option>
  <option value="Gain Weight">Gain Weight</option>
  <option value="Maintain Weight">Maintain Weight</option>
</select><br><br>
<input type="submit" value="Add Diet">
</form>
@endsection