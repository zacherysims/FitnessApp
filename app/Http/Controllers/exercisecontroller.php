<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class exercisecontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exercises = DB::select('select * from exercise where exercise_creator_username = ?', [\Auth::user()->name]);
        return view('workouts/viewexercises', ['exercises' => $exercises]);
    }

    public function fill(){
        $username = \Auth::user()->name;
        $name = request('name');
        $type = request('type');
        $numsets = request('numsets');
        $comment = request('comment');
        $workout = request('workout');


        $workouts = DB::select('select * from workout where workout_id = ? limit 1', [$workout]);
        foreach($workouts as $workout)
        {
            $workoutid = $workout->workout_id;
        }

        if(isset($workoutid)){
            DB::insert('insert into exercise(exercise_name, exercise_type, exercise_num_sets, exercise_workout_id, exercise_comment, exercise_creator_username, exercise_user_username) values(?, ?, ?, ?, ?, ?, ?)', 
            [$name, $type, $numsets, $workoutid, $comment, $username, $username]);
        }
        $exercises = DB::select('select * from exercise where exercise_creator_username = ?', [\Auth::user()->name]);
        return view('workouts/viewexercises', ['exercises' => $exercises]);
    }
}
