@extends('masterlayout')
@section('title')
    Personal info
@endsection
@section('tab')
Add a Diet
@endsection
@section('content')

<h1>Please fill out the information below</h1>
<form action="/formfill">
  Username:<br>
  <input type="text" name="username" required><br><br>
  Weight:<br>
  <input type="number" name="weight" min = "1" max = "999" required><br><br>
  Goal Weight:<br>
  <input type="number" name="goalweight" min = "1" max = "999" required><br><br>
  Training Goal:<br>
  <select required>
  <option value="" selected disabled hidden></option>
  <option name="goal" value="Lose Weight">Lose Weight</option>
  <option name="goal" value="Gain Weight">Gain Weight</option>
  <option name="goal" value="Maintain Weight">Maintain Weight</option>
</select><br><br>
  Height (cm):<br>
  <input type="number" name="height" min = "1" max = "999" required><br><br>
  Age:<br>
  <input type="number" name="age" min = "1" max = "999" required><br><br>
<input type="submit" value="Done">
</form>
@endsection