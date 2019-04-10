@extends('masterlayout')
@section('title')
    You gonna cry?
@endsection
@section('tab')
Add a Diet
@endsection
@section('content')

<h1>Add a diet maybe?</h1>
<form action="adddiet">
  Name:<br>
  <input type="text" name="Name"><br><br>
  Length(Days):<br>
  <input type="number" name="Length" min = "1" max = "365" ><br><br>
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
Comment:<br>
  <textarea name="Comment"></textarea><br><br>
<input type="submit" value="Add Diet">
</form>

$query = DB::insert('insert into diet(diet_id, diet_rou_id, diet_username,
          diet_difficulty, diet_length, diet_goal, diet_name) values (?, ?, ?, ?, ?, ?, ?)', 
          ['1234', '1234', 'username',
          htmlspecialchars($_POST['Difficulty'], htmlspecialchars($_POST['Goal']), 
          htmlspecialchars($_POST['Name'])]);
@endsection