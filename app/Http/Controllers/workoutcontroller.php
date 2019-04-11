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
        $type = request('style');
        $numex = request('numex');
        $hours = request('length_hours');
        $minutes = request('length_min');
        $length = (int)$hours * 60 + (int)$minutes;
        $comment = request('comment');
        $routinename = strtok(request('routinename'));
        $currentusername = \Auth::user()->name;

        $routines = DB::select('select * from rou where rou_name = ? limit 1', [$routinename]);
        foreach($routines as $routine)
        {
            $routineid = $routine->rou_id;
        }

        if(isset($routineid)){
            DB::insert('insert into workout(workout_date, workout_difficulty, workout_type, workout_num_ex, workout_length, workout_rou_id, workout_comment, workout_username) values(?, ?, ?, ?, ?, ?, ?, ?)',
        [$date, $difficulty, $type, $numex, $length, $routineid, $comment, $currentusername]);
        }
        
        $workouts = DB::select('select * from workout where workout_username = ?', [\Auth::user()->name]);
        return view('workouts/viewworkouts', ['workouts' => $workouts]);
    }
}