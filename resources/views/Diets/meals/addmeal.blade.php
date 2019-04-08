@extends('masterlayout')

@section('title')
    You gonna cry?
@endsection
@section('content')
<h1>Add a meal maybe?</h1>

<form action="/action_page.php">
  Meal:<br>
  <input type="text" name="Meal" value="Breakfast"><br><br>
  Food:<br>
  <input type="text" name="Food" value="Egg"><br><br>
  Calories:<br>
  <input type="int" name="Calories" value="80"><br><br>
  <input type="submit" value="Add Meal">
</form>


@endsection