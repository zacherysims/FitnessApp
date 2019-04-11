<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class workoutcontroller extends Controller
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
        $workouts = DB::select('select * from workout where workout_username = ?', [\Auth::user()->name]);
        return view('workouts/viewworkouts', ['workouts' => $workouts]);
    }

    public function fill(){
        $date = request('date');
        $difficulty = request('difficulty');
        $type = request('type');
        $numex = request('numex');
        $hours = request('length_hours');
        $minutes = request('length_min');
        $length = (int)$hours * 60 + (int)$minutes;
        $comment = request("comment"); 

        $currentusername = \Auth::user()->name;

        $id = DB::select("Select rou_id from rou ORDER BY rou_id LIMIT 1");

        DB::insert('insert into workout(workout_date, workout_difficulty, workout_type, workout_num_ex, workout_length, workout_rou_id, workout_comment, workout_username) values(?, ?, ?, ?, ?, ?, ?, ?)',
        [$date, $difficulty, $type, $numex, $length, '2', $comment, $currentusername]);
        return view('workouts.viewworkouts');
    }
}